<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session; 
/*use App\Curso;
use App\CatalogoCurso;
use App\Profesor;
use App\ProfesoresCurso;
use App\EvaluacionXCurso;
use App\EvaluacionXSeminario;
use App\Coordinacion;
use App\ParticipantesCurso;
use App\EvaluacionFinalCurso;
use App\EvaluacionFinalSeminario;*/
use Illuminate\Support\Facades\Storage;
use Mail;
use PDF;
use DB; 
use Carbon\Carbon;

class AreaController extends Controller
{
    /**
     * Función que retorna a la vista de super usuario
     * @return Vista super usuario
     */
    public function index(){

        //$coordinaciones = Coordinacion::all();

        return view('pages.homeArea'); //Route -> coordinador
    }
}
