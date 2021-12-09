<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionCurso extends Model
{
   protected $table = '_evaluacion_final_curso';

   protected $fillable = [
      'p1_1',
      'p1_2',
      'p1_3',
      'p1_4',
      'p1_5',
      'p2_1',
      'p2_2',
      'p2_3',
      'p2_4',
      'p3_1',
      'p3_2',
      'p3_3',
      'p3_4',
      'p7',
      'p8',
      'p9',
      'sug',
      'otros',
      'conocimiento',
      'tematica',
      'horarios',
      'horarioi'
   ];
   protected $casts = [
      'p8' => 'array',
      'conocimiento' => 'array'
  ];
  public $timestamps = false;

  public function getCons($p){
    if($p === 100 || $p === 95 || $p === 80)
      return 1;
    elseif($p === 60 || $p === 50)
      return 0;
    else
      return NULL;
  }

}
