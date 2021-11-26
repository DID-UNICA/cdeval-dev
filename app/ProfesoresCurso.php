<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfesoresCurso extends Model
{
    protected $table = 'profesor_curso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'curso_id','profesor_id'];

  public function getProfesor(){
    return Profesor::findOrFail($this->profesor_id);
  }

  public function getNombreProfesor(){
    $prof = Profesor::findOrFail($this->profesor_id);
    return $prof->nombres.' '.$prof->apellido_paterno.' '.$prof->apellido_materno;
  }
  public function getEvaluacionByParticipante(int $participante_id){
    return EvaluacionInstructor::where('instructor_id', $this->id)
      ->where('participante_id', $participante_id)->get()->first();
  }

  public function getEvaluaciones(){
    return EvaluacionInstructor::where('instructor_id', $this->id)->get();
  }
}
