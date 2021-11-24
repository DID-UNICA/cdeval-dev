<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionInstructor extends Model
{
   protected $table = '_evaluacion_instructor_curso';

   protected $fillable = [
      'p1',
      'p2',
      'p3',
      'p4',
      'p5',
      'p1',
      'p2',
      'p3',
      'p4',
      'p1',
      'p2',
      'p3',
      'p4',
      'p7',
      'p8',
      'p9',
      'p10',
      'p11',
      'participante_id',
      'instructor_id'
   ];
  public $timestamps = false;
}
