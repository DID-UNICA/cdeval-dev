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
}
