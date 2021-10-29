<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Support\Facades\Db;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Coordinacion extends Model
class Coordinacion extends Authenticatable
{
  use Notifiable;
    protected $table = 'coordinacions';

    protected $fillable = ['id','abreviatura','nombre_coordinacion','coordinador','grado',
        'comentarios', 'password'
    ];

    protected $hidden = ['password', 'remember_token'];
    
    public function getCursos(){
      return Curso::join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
                  ->where('catalogo_cursos.coordinacion_id', $this->id)
                  ->select('cursos.*')
                  ->get();
    }

    public function getCatalogos(){
      return CatalogoCurso::where('catalogo_cursos.coordinacion_id', $this->id)
                            ->get();
    }
}
