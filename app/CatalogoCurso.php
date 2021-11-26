<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoCurso extends Model
{
protected $table = 'catalogo_cursos';

/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'id','nombre_curso','duracion_curso','coordinacion_id','tipo','tipo_curso_diploma_instructor','presentacion',
'tipo_difusion','dirigido','objetivo','contenido','sintesis','metodologia','acreditacion','evaluacion',
'bibliografia','antecedentes','consecuentes','fecha_disenio','clave_curso'
];

    public function getCoordinacion(){
        $coordinacion = Coordinacion::findOrFail($this->coordinacion_id)->nombre_coordinacion;
        return $coordinacion;
    }
    
    public function allCoordinacion(){
        $coordinacion = Coordinacion::all();
        return $coordinacion;
    }

    public function getIdCoordinacion()
    {
        return $this->coordinacion_id;
    }
    public function getTipoCadena(){
      if($this->tipo === 'CT')
        return 'Curso';
      if($this->tipo === 'C')
        return 'Curso';
      if($this->tipo === 'T')
        return 'Curso';
      if($this->tipo === 'E')
        return 'Evento';
      if($this->tipo === 'S')
        return 'Seminario';
      if($this->tipo === 'D')
        return 'Módulo de Diplomado';
      if($this->tipo === 'F')
        return 'Foro';
    }

}
