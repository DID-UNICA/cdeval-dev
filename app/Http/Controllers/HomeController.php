<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use App\Coordinacion;

class HomeController extends Controller
{
    public function index(){
    $coordinaciones = Coordinacion::all()->pluck('abreviatura','nombre_coordinacion');
        return view('pages.main')
            ->with('coordinaciones',$coordinaciones);
    }
}
