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
    
    // public function getAuthIdentifierName()
    // {
    //     return "abreviatura";
    // }

    // public function getAuthIdentifier()
    // {
    //     return $this->abreviatura;
    // }

}
