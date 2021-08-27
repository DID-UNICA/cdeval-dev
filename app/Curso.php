<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Db;

class Curso extends Model
{
    protected $table = 'cursos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','semestre_imparticion','fecha_inicio','fecha_fin','hora_inicio','hora_fin','dias_semana',
        'numero_sesiones','texto_diploma','profesor_id','costo','orden','fecha_disenio','cupo_maximo',
        'cupo_minimo','status','catalogo_id','salon_id'
    ];

    public function getNombreCurso(){
        return CatalogoCurso::findOrFail($this->catalogo_id)->nombre_curso;
    }
    
    public function getSalon(){
        $salon = Salon::findOrFail($this->salon_id)->sede;
        return $salon;
    }
		// TODO Eliminar este metodo, el curso tiene profesores no solo un profesor
    public function getProfesor(){
        $nombre = Profesor::findOrFail($this->profesor_id)->nombres;
        $ap_pat = Profesor::findOrFail($this->profesor_id)->apellido_paterno;
        $ap_mat = Profesor::findOrFail($this->profesor_id)->apellido_materno;

        return $nombre." ".$ap_pat." ".$ap_mat;
    }

		// TODO Eliminar estos metodos, se puede acceder a los atributos por medio del operador ->atributo
    public function getIdCatalogo(){
        return $this->catalogo_id;
    }
    
    public function getIdProfesor(){
        return  $this->profesor_id;
    }
    
    public function getIdSalon(){
        
        return $this->salon_id;
    }

    public function getSemestre(){
        $semestre = Curso::findOrFail($this->id)->semestre_imparticion;
        return $semestre;
    }

    public function allNombreCurso(){
        $nombre = CatalogoCurso::all('nombre_curso','id');
        return $nombre;
    }
    public function allProfesor(){
        $profesors = Profesor::all();
        return $profesors;
    }
    public function allSalon(){
        $salon = Salon::all();
        return $salon;
    }
    public function getProfesores(){
        $profesoresCurso = ProfesoresCurso::where('curso_id',$this->id)->get();
        
        $cadena="";

        if ( count($profesoresCurso) == 1 ){
            $profesor=Profesor::find($profesoresCurso[0]->profesor_id);
            $cadena.=$profesor->nombres." ";
            $cadena.=$profesor->apellido_paterno." ";
            $cadena.=$profesor->apellido_materno;
            return $cadena;
        }
        foreach($profesoresCurso as $profesorCurso){
            $profesor=Profesor::find($profesorCurso->id);
            $cadena.=$profesor->nombres." ";
            $cadena.=$profesor->apellido_paterno." ";
            $cadena.=$profesor->apellido_materno." / ";
        }
        $cadena= substr($cadena, 0, -2);
        return $cadena;
    }
    public function getProfesores2(){
        $profesoresCurso = ProfesoresCurso::where('curso_id',$this->id)->get();

        $cadena="";

        if ( count($profesoresCurso) == 1 ){
            $profesor=Profesor::find($profesoresCurso[0]->id);
            $cadena.=$profesor->nombres." ";
            $cadena.=$profesor->apellido_paterno." ";
            $cadena.=$profesor->apellido_materno;
            return $cadena;
        }
        foreach($profesoresCurso as $profesorCurso){
            $profesor=Profesor::find($profesorCurso->profesor_id);
            $cadena.=$profesor->nombres." ";
            $cadena.=$profesor->apellido_paterno." ";
            $cadena.=$profesor->apellido_materno."/";
        }
        $cadena= substr($cadena, 0, -1);
        return $cadena;
    }
    public function getCorreo(){
        $profesoresCurso = ProfesoresCurso::where('curso_id',$this->id)->get();

        $cadena="";

        if ( count($profesoresCurso) == 1 ){
            $profesor=Profesor::find($profesoresCurso[0]->id);
            $cadena.=$profesor->email;
            return $profesor->email;
        }
        foreach($profesoresCurso as $profesorCurso){
            $profesor=Profesor::find($profesorCurso->id);
            $cadena.="'".$profesor->email."',";
        }
        $cadena= substr($cadena, 0, -1);
        return $cadena;
    }
	
	public function getSender(){
		$profesoresCurso = ProfesoresCurso::where('curso_id',$this->id)->get();

        $cadena="";

        if ( count($profesoresCurso) == 1 ){
            $profesor=Profesor::find($profesoresCurso[0]->id);
            $cadena.=$profesor->getNombre();
            return $cadena;
        }
        foreach($profesoresCurso as $profesorCurso){
            $profesor=Profesor::find($profesorCurso->id);
            $cadena.="'".$profesor->getNombre()."',";
        }
        $cadena= substr($cadena, 0, -1);
        return $cadena;
	}

    public function getToday(){
        $date = \Carbon\Carbon::now()->locale('es_MX');

        return $date->isoFormat('dddd, DD MMMM YYYY');
    }

}
