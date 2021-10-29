<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
       ->join('cursos', 'cursos.id', '=', 'profesor_curso.curso_id')
       ->where('cursos.id', '=', $this->id)
       ->get();
        return $instructores;
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
        return ParticipantesCurso::where('cursos.id', '=', $this->id)->get();
    }

    public function getDiplomado(){
      return Diplomado::find($this->diplomado_id);
    }

    public function getToday(){
      $date = \Carbon\Carbon::now()->locale('es_MX');
      return $date->isoFormat('dddd, DD MMMM YYYY');
  }
}

