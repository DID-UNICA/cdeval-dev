<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipantesCurso extends Model
{
    protected $table = 'participante_curso';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'curso_id','profesor_id','confirmacion','asistencia','pago_curso','monto_pago','cancelación','evaluacion_mobilirario','evaluacion_limpiea','estuvo_en_lista','contesto_hoja_evaluacion','acreditacion','causa_no_acreditacion','calificacion','inscrito','comentario'];

  public function getProfesor(){
    return Profesor::findOrFail($this->profesor_id);
  }

  public function getCurso(){
    return Curso::findOrFail($this->curso_id);
  }

  public function getEvaluacionesInstructores(){
    return EvaluacionInstructor::where('participante_id', $this->id)->get();
  }
}
