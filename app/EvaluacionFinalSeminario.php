<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionFinalSeminario extends Model
{
   protected $table = '_evaluacion_final_seminario';

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
    'p4_1',
    'p4_2',
    'p4_3',
    'p4_4',
    'p4_5',
    'p4_6',
    'p4_7',
    'p4_8',
    'p4_9',
    'p4_10',
    'p4_11',
    'p5_1',
      'p5_2',
      'p5_3',
      'p5_4',
      'p5_5',
      'p5_6',
      'p5_7',
      'p5_8',
      'p5_9',
      'p5_10',
      'p5_11',
      'p6_1',
      'p6_2',
      'p6_3',
      'p6_4',
      'p6_5',
      'p6_6',
      'p6_7',
      'p6_8',
      'p6_9',
      'p6_10',
      'p6_11',
      'p7',
      'p8',
    'aporto',
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
}
