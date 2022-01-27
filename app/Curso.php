<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Curso extends Model
{
    protected $table = 'cursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','semestre_anio','semestre_pi','semestre_si','fecha_inicio',
        'fecha_fin','hora_inicio','hora_fin','dias_semana','numero_sesiones',
        'sesiones','acreditacion','costo','cupo_maximo','cupo_minimo',
        'fecha_envio_constancia', 'fecha_envio_reconocimiento','num_modulo',
        'catalogo_id','salon_id', 'diplomado_id'
    ];

    public function getCatalogoCurso(){
      $catalogo = CatalogoCurso::find($this->catalogo_id);
      return $catalogo;
    }

    public function getSemestre(){
        return $this->semestre_anio."-".$this->semestre_pi." ".$this->semestre_si." ";
    }

    public function getInstructores(){
       $instructores = Profesor::join('profesor_curso', 'profesors.id', '=', 'profesor_curso.profesor_id')
       ->where('profesor_curso.curso_id', '=', $this->id)
       ->get('profesors.nombres','profesors.apellido_paterno','profesors.apellido_materno');
        return $instructores;
    }

    public function getProfesoresCurso(){
       return ProfesoresCurso::where('curso_id', $this->id)->get();
   }

   public function getParticipantesCursoId(){
    return ParticipantesCurso::where('curso_id', $this->id)->get('id');
}
    public function getCadenaInstructores(){
        $instructores = ProfesoresCurso::where('curso_id',$this->id)->get();

        $cadena="";

        if ( count($instructores) == 1 ){
            $profesor = Profesor::findOrFail($instructores[0]->profesor_id);
            $cadena .= $profesor->nombres." ";
            $cadena .= $profesor->apellido_paterno." ";
            $cadena .= $profesor->apellido_materno;
            return $cadena;
        }
        foreach($instructores as $instructor){
            $profesor = Profesor::find($instructor->profesor_id);
            $cadena .= $profesor->nombres." ";
            $cadena .= $profesor->apellido_paterno." ";
            $cadena .= $profesor->apellido_materno."/";
        }
        $cadena = substr($cadena, 0, -1);
        return $cadena;
    }

    public function getParticipantes(){
        return ParticipantesCurso::where('curso_id', '=', $this->id)->get();
    }

    public function getDiplomado(){
      return Diplomado::find($this->diplomado_id);
    }

    public function getToday(){
      $date = \Carbon\Carbon::now()->locale('es_MX');
      return $date->isoFormat('dddd, DD MMMM YYYY');
  }

  public function getEvalsCurso(){
    $participantes = $this->getParticipantesCursoId();
    if($participantes->isEmpty())
      return collect();
    return EvaluacionCurso::whereIn('participante_curso_id', $participantes)->get();
  }

  public function getSede(){
    return DB::table('salons')->where('id', $this->salon_id)->get('sede')->first();
  }

  public function getPeriodo(){
    return $this->semestre_anio.'-'.$this->semestre_pi.$this->semestre_si;
  }

  public function getFecha(){
    $sesiones_array = explode(',' , $this->sesiones);
    
    //zona horaria para Carbon
    $tz='America/Mexico_City';

    //arrays utiles
    $meses_array = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 
                        'julio', 'agosto', 'septiembre', 'octubre', 'noviembre',
                        'diciembre');

    $dias_semana_array = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 
                                'Viernes', 'Sábado', 'Domingo');

    //se consiguen en Carbon las fechas de inicio y fin del curso además del auxiliar
    $fecha_inicio = $this->fecha_inicio;
    $fecha_fin = $this->fecha_fin;

    if ($fecha_inicio[8] == '0')
        $dia_inicio = $fecha_inicio[9];
    else
      $dia_inicio = $fecha_inicio[8] . $fecha_inicio[9];
    if($fecha_fin[8] == '0')
      $dia_fin = $fecha_fin[9];
    else
      $dia_fin = $fecha_fin[8] . $fecha_fin[9];
    
    $anio_fin = $fecha_fin[0].$fecha_fin[1].$fecha_fin[2].$fecha_fin[3];
    $mes_fin = $fecha_fin[5].$fecha_fin[6];
    $anio_inicio = $fecha_inicio[0].$fecha_inicio[1].$fecha_inicio[2].$fecha_inicio[3];
    $mes_inicio = $fecha_inicio[5].$fecha_inicio[6];
    $auxYear = (int)$anio_inicio;
    $auxMonth = (int)$mes_inicio;
  
    $fecha_inicio = Carbon::createFromDate((int)$anio_inicio, (int)$mes_inicio, (int)$dia_inicio, $tz);
    $fecha_fin = Carbon::createFromDate((int)$anio_fin, (int)$mes_fin, (int)$dia_fin, $tz);
    $fecha_aux = Carbon::createFromDate((int)$anio_inicio, (int)$mes_inicio, (int)$dia_inicio, $tz);

    //se llena el array de los dias que se imparte el curso 
    //eg:[1,3,5] para un curso de lunes, miercoles y viernes
    $dias_curso_array = array();
    foreach ($dias_semana_array as $diaSemana) {
        if (substr_count($this->dias_semana, $diaSemana) > 0)
            array_push($dias_curso_array, array_search($diaSemana, $dias_semana_array)+1);      
    }

    $hayIntervalo = 0;
    //aqui se obtiene el posible intervalo de dias en una semana
    if (sizeof($dias_curso_array) >= 3) {
      $y = 0;
      for ($x = 0; $x < sizeof($dias_curso_array) && $hayIntervalo == 0; $x++) { 
        if ($dias_curso_array[($x+1) % sizeof($dias_curso_array)] - $dias_curso_array[$x] == 1) {
          $y = $x + 1;
          while ($dias_curso_array[($y+1) % sizeof($dias_curso_array)] - $dias_curso_array[$y] == 1) {
            $y++;
          }
          if ($y - $x > 3) {
            $hayIntervalo = $y - $x;
          }
        }
      }
        $c = 0;
        $fecha_aux_i = Carbon::createFromDate((int)$anio_inicio, (int)$mes_inicio, (int)$dia_inicio, $tz);
        for ($s=0; $s < count($sesiones_array); $s++) { 
            $fecha_s = Carbon::createFromDate((int)substr($sesiones_array[$s],0,4), (int)substr($sesiones_array[$s],5,2), (int)substr($sesiones_array[$s],8), $tz);
            if ($fecha_aux_i->diffInDays($fecha_s) == 1) {
                $c++;
            }else{$c = 0;}
            $fecha_aux_i = Carbon::createFromDate((int)substr($sesiones_array[$s],0,4), (int)substr($sesiones_array[$s],5,2), (int)substr($sesiones_array[$s],8), $tz);
        }
        if ($c < 4) {
            $hayIntervalo = 0;
        }
    }

    if(sizeof($dias_curso_array) > 0) {
    //ajustes para empatar fecha_inicio y fecha_fin con un dia de imparticion de curso
    while (!in_array(($fecha_inicio->dayOfWeek+7)%7, $dias_curso_array)) {
      $fecha_inicio->addDay();
    }

    while (!in_array(($fecha_fin->dayOfWeek+7)%7, $dias_curso_array)) {
      $fecha_fin->subDay();
    }

    if (strlen($this->sesiones)>0) {
        if (count($sesiones_array) == 1) {
            $fecha_cadena = 'El día '.(int)substr($this->sesiones,8).' de '.$meses_array[((int)substr($this->sesiones,5,2))-1].' de '.substr($this->sesiones,0,4);
        }else{
            $fecha_cadena = 'Los días '.(int)substr($sesiones_array[0],8);
            for ($i=1; $i < count($sesiones_array)-1; $i++) { 
                if (substr($sesiones_array[$i],0,4) != substr($sesiones_array[$i-1],0,4)) {
                    $fecha_cadena .= ' de '.$meses_array[((int)substr($sesiones_array[$i-1],5,2))-1].' de '.substr($sesiones_array[$i-1],0,4).'. '.(int)substr($sesiones_array[$i],8);
                }elseif (substr($sesiones_array[$i],5,2) != substr($sesiones_array[$i-1],5,2)) {
                    $fecha_cadena .= ' de '.$meses_array[((int)substr($sesiones_array[$i-1],5,2))-1].'; '.(int)substr($sesiones_array[$i],8);
                }else{
                    $fecha_cadena .= ', '.(int)substr($sesiones_array[$i],8);
                }
            }
            $i = count($sesiones_array)-1;
            if (substr($sesiones_array[$i],0,4) != substr($sesiones_array[$i-1],0,4)) {
                $fecha_cadena .= ' de '.$meses_array[((int)substr($sesiones_array[$i-1],5,2))-1].' de '.substr($sesiones_array[$i-1],0,4).'. ';
            }elseif (substr($sesiones_array[$i],5,2) != substr($sesiones_array[$i-1],5,2)) {
                $fecha_cadena .= ' de '.$meses_array[((int)substr($sesiones_array[$i-1],5,2))-1].'; ';
            }
            $fecha_cadena .= ' y '.(int)substr($sesiones_array[$i],8).' de '.$meses_array[((int)substr($sesiones_array[$i],5,2))-1].' de '.substr($sesiones_array[$i],0,4).'.';
        }
    }
    else{
        
        //La magia
        //variable de retorno
        if ($fecha_inicio->diffInDays($fecha_fin) != 0){
            $fecha_cadena = 'Los días ';
            for (; $fecha_aux->diffInDays($fecha_fin) != 0; $fecha_aux->addDay()) {
                if (in_array(($fecha_aux->dayOfWeek+7)%7, $dias_curso_array)){
                    if ($fecha_aux->year != $auxYear) {
                        $fecha_cadena .= ' de '.$meses_array[$auxMonth-1].' de '.(string)$auxYear.'. ';
                        $auxYear = $fecha_aux->year;
                        $auxMonth = $fecha_aux->month;
                        $fecha_cadena .= (string)$fecha_aux->day;
                    }
                    elseif ($fecha_aux->month != $auxMonth) {
                        $fecha_cadena .= ' de '.$meses_array[$auxMonth-1].'; ';
                        $auxMonth = $fecha_aux->month;
                        $fecha_cadena .= (string)$fecha_aux->day;
                    }else{
                        if ($fecha_aux->diffInDays($fecha_inicio) == 0){
                            $fecha_cadena .= (string)$fecha_aux->day;
                        }else{
                                $fecha_cadena .= ', '.(string)$fecha_aux->day;
                        }
                    }
                }
            }
        }else{
            $fecha_cadena = 'El día '.$fecha_inicio->day;
        }


        //fianlizacion de la cadena
        if (in_array(($fecha_aux->dayOfWeek+7)%7, $dias_curso_array) && $fecha_inicio->diffInDays($fecha_fin) != 0){
          $fecha_cadena .= ' y '.(string)$fecha_aux->day;
        }
        $fecha_cadena .= ' de '.$meses_array[$auxMonth-1].' de '.(string)$auxYear;
    }

    //Si la cadena tiene más de 90 caracteres se cambia el formato
    if (strlen($fecha_cadena) > 120 || $hayIntervalo > 1) {
        if ($anio_inicio == $anio_fin) {
            if ($mes_inicio == $mes_fin) {
                $fecha_cadena = 'Del '.$dia_inicio .' al '.$dia_fin.' de '.$meses_array[(int)$mes_fin-1].' de '.$anio_fin;      
            }else{
                $fecha_cadena = 'Del '.$dia_inicio.' de '.$meses_array[(int)$mes_inicio-1].' al '.$dia_fin.' de '.$meses_array[(int)$mes_fin-1].' de '.$anio_fin;   
            }
        }else{
            $fecha_cadena = 'Del '.$dia_inicio.' de '.$meses_array[(int)$mes_inicio-1].' de '.$anio_inicio.' al '.$dia_fin.' de '.$meses_array[(int)$mes_fin-1].' de '.$anio_fin;   
        }
    }
    return $fecha_cadena;

    }

    return $this->sesiones;

}
}

