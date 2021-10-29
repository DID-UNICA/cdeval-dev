<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


use App\Coordinacion;

class HomeController extends Controller
{
    public function index(){
    $coordinacion = Auth::user();
    if($coordinacion->es_admin === True)
      return redirect()->route('admin.index');
    elseif($coordinacion->es_admin === False)
      return redirect()->route('area.index');
    else
      return "ERROR 404";
  }
}