<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profesor extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "profesors";
    protected $fillable = [
        'nombres', 'apellido_paterno','apellido_materno','rfc','curp','categoria_nivel_id',
        'fecha_nacimiento','telefono','grado','email','usuario', 'fecha_alta','estudios',
        'grado','area','comentarios','genero','tutor','baja','causa_baja','semblanza_corta',
        'facebook','unam','procedencia','facultad_id','carrera_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fechaFormato(){
        $fecha = Carbon::parse($this->fecha_nacimiento)->format('d-m-Y');
        return $fecha;
        
    }

    public function getCategoria(){
        $categoria = CategoriaNivel::findOrFail($this->categoria_nivel_id)->categoria;
        return $categoria;
    }

    public function allCategoria(){
        $categoria = CategoriaNivel::all();
        return $categoria;
    }

    public function getIdCategoria()
    {
        return $this->categoria_nivel_id;
    }
	
	public function getNombre()
	{
		$cadena="";
		$cadena.=$this->nombres." ".$this->apellido_paterno." ".$this->apellido_materno;
		return $cadena;
	}
	
	public function getCorreo()
	{
		$cadena="";
		$cadena.=$this->email;
		return $cadena;
	}

}
