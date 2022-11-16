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
  public $timestamps = false;

  public function getCons($p){
    if($p === 100 || $p === 95 || $p === 80)
      return 1;
    elseif($p === 60 || $p === 50)
      return 0;
    else
      return NULL;
  }

  public function conocimientoToArray(){
    if($this->conocimiento || $this->conocimiento != '[]'){
      $find = ['[', ']', ' ', "'", '"'];
      return explode("," , str_replace($find, "", $this->conocimiento));
    }
    else
      return NULL;
  }

  public function p8ToArray(){
    if($this->p8 || $this->p8 != '[]'){
      $find = ['[', ']', ' ', "'", '"'];
      return explode("," , str_replace($find, "", $this->p8));
    }
    else
      return NULL;
  }

  public function conocimientoToString($input){
    $r = '[';
    if($input){
      foreach($input as $key => $value) {
        $r .= "'".$value."'";
        if (next($input)==true) $r .= ",";
    }
    return $r .=']';
    }
    else
      return NULL;
  }

  public function p8ToString($input){
    $r = '[';
    if($input){
      foreach($input as $key => $value) {
        if($value){
          $r .= "'".$value."'";
        }
        if (next($input)==true) $r .= ",";
    }
    return $r .=']';
    }
    else
      return NULL;
  }
}
