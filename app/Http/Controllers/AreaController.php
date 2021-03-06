<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Curso;
use App\CatalogoCurso;
use App\Profesor;
use App\ProfesoresCurso;
use App\ParticipantesCurso;
use App\EvaluacionCurso;
use App\EvaluacionInstructor;
use App\EvaluacionFinalCurso;
use App\EvaluacionFinalSeminario;
/*use App\EvaluacionXCurso;
use App\EvaluacionXSeminario;
use App\Coordinacion;*/
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
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
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $coordinacion = Auth::user();
        
        $cursos = $coordinacion->getCursos();

        Session::put('sesion','area');
        Session::put('url','area');

        if(Session::has('message-danger')){
          Session::flash('message-danger','Sucedió un error al contestar el formulario. Favor de llenar todas las preguntas o revisar que el usuario en cuestión no lo haya contestado');
        }
        return view('pages.homeArea')
            ->with('cursos',$cursos)
            ->with('coordinacion',$coordinacion);
    }

    // public function cambioFecha(Request $request){

    //     $fecha=$request->get('semestre');
    //     $periodo=$request->get('periodo');

		// $toRedirect = $fecha.'-'.$periodo;
		// return redirect()->to('/area/'.$toRedirect.'');

    // }

	public function nuevaFecha(Request $request, $fecha){
    if (Auth::guest()) {
      return redirect()->route('coordinador.login');
    }
		$coordinacion_nombre = 'Área de cómputo';
		$semestre = explode('-',$fecha);

        $cursos = DB::table('cursos')
            ->join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
            ->join('coordinacions','coordinacions.id','=','coordinacion_id')
            ->select('catalogo_cursos.nombre_curso','cursos.id')
            ->where([['cursos.semestre_anio',$semestre[0]],['cursos.semestre_pi',$semestre[1]],['cursos.semestre_si',$semestre[2]],['coordinacions.nombre_coordinacion',$coordinacion_nombre]])
            ->get();

        $datos = array();
        foreach($cursos as $curso){
            $tupla = array();
            $profesores = DB::table('profesor_curso')
                ->join('profesors','profesors.id','=','profesor_curso.profesor_id')
                ->select('profesors.nombres','profesors.apellido_paterno','profesors.apellido_materno')
                ->where('profesor_curso.curso_id','=',$curso->id)
                ->get();
            array_push($tupla, $curso);
            array_push($tupla, $profesores);
            array_push($datos, $tupla);
        }

        $semestre_anio = DB::table('cursos')
            ->select('semestre_anio')
            ->get();
        
        $coordinaciones = DB::table('coordinacions')
            ->select('nombre_coordinacion')
            ->get();

        $semestres = array();
        foreach($semestre_anio as $semestre){
            if(!in_array($semestre,$semestres)){
                array_push($semestres,$semestre);
            }
        }
        sort($semestres);
        $reversed = array_reverse($semestres);
        
		$id = DB::table('coordinacions')
            ->where([['nombre_coordinacion',$coordinacion_nombre]])
            ->get();

        return view('pages.homeArea')
            ->with('datos',$datos)
            ->with('semestre_anio',$reversed)
            ->with('coordinacion',$coordinacion_nombre)
			->with('coordinacion_id',$id[0]->id);
	}

    public function buscarCurso(Request $request, $coordinacion_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
      $coordinacion = Auth::user();
      if($request->type === 'nombre')
        $cursos = Curso::join('catalogo_cursos','catalogo_cursos.id','=','cursos.catalogo_id')
        ->whereRaw("lower(unaccent(nombre_curso)) ILIKE lower(unaccent('%".$request->pattern."%'))")
        ->where('catalogo_cursos.coordinacion_id',$coordinacion->id)
        ->get();
      elseif($request->type === 'instructor'){
        $profesores = array();
          $words=explode(" ", $request->pattern);
          $words_num = sizeof($words);
          for ($AP=1; $AP <= $words_num; $AP++) {
            for ($AM=0; $AM <= $words_num-$AP; $AM++) {
              $N = $words_num-$AP-$AM;
              if ($AM==0 and $N==0) {
                $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%')))")->get();
              if($profesor->isNotEmpty())
                array_push($profesores, $profesor);
              }elseif ($AM>0 and $N==0) {
                $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%'))) AND (unaccent(lower(apellido_materno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP, $AM))."%')))")->get();
              if($profesor->isNotEmpty())
                array_push($profesores, $profesor);
              }elseif ($AM==0 and $N>0){
                $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(nombres)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP+$AM))."%'))) AND (unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%')))")->get();
              if($profesor->isNotEmpty())
                array_push($profesores, $profesor);
              }else{
                $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(nombres)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP+$AM))."%'))) AND (unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%'))) AND (unaccent(lower(apellido_materno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP, $AM))."%')))")->get();
              if($profesor->isNotEmpty())
                array_push($profesores, $profesor);
              }
            }
          }
          $tmp = array();
          foreach($profesores as $profesor_ar){
            foreach($profesor_ar as $profesor){
              array_push($tmp, $profesor->id);
            }
          }
        $curso_prof = ProfesoresCurso::select('curso_id')->whereIn('profesor_id', $tmp)->get();
        $cursos = Curso::join('catalogo_cursos','catalogo_cursos.id', '=','cursos.catalogo_id')
                ->where('catalogo_cursos.coordinacion_id',$coordinacion->id)
                ->whereIn('cursos.id',$curso_prof)
                ->select('cursos.*', 'catalogo_cursos.coordinacion_id')
                ->get();
      }
      return view('pages.homeArea')
           ->with('cursos',$cursos)
           ->with('coordinacion',$coordinacion);
    }
    
    public function buscarCursoPeriodo(Request $request, $coordinacion_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
      $coordinacion = Auth::user();
      $cursos = Curso::join('catalogo_cursos','catalogo_cursos.id','=','cursos.catalogo_id')
                     ->where('semestre_si', $request->semestre_si)
                     ->where('semestre_pi', $request->semestre_pi)
                     ->where('semestre_anio', $request->semestre_anio)
                     ->where('catalogo_cursos.coordinacion_id',$coordinacion->id)
                     ->get();
      return view('pages.homeArea')
           ->with('cursos',$cursos)
           ->with('coordinacion',$coordinacion);
    }

	public function nuevoCurso(Request $request, $coordinacion_id, $busqueda, $tipo){
    if (Auth::guest()) {
      return redirect()->route('coordinador.login');
    }
		$datos = array();
		$cursos;

		if($tipo == 'nombre'){
			$cursos = DB::table('cursos as c')
				->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
				->join('coordinacions as co','co.id','=','cc.coordinacion_id')
				->where([['cc.nombre_curso','like','%'.$busqueda.'%'],['co.id','=',$coordinacion_id]])
				->get();
			
				foreach($cursos as $curso){
					$tupla = array();
					$profesores = DB::table('profesor_curso')
						->join('profesors','profesors.id','=','profesor_curso.profesor_id')
						->select('profesors.nombres','profesors.apellido_paterno','profesors.apellido_materno')
						->where('profesor_curso.curso_id','=',$curso->id)
						->get();
					array_push($tupla, $curso);
					array_push($tupla, $profesores);
					array_push($datos, $tupla);
					}

		}else{
			$profesores = array();
		
			$words=explode(" ", $busqueda);
			foreach($words as $word){
				$profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(lower(nombres) LIKE lower('%".$word."%')) OR (lower(apellido_paterno) LIKE lower('%".$word."%')) OR (lower(apellido_materno) LIKE lower('%".$word."%'))")->get();
				array_push($profesores, $profesor);
			}
			$curso_prof = array();
			$aux = array();

			foreach($profesores as $profesor_aux){
				foreach($profesor_aux as $profesor){
					$prof = DB::table('profesor_curso')
						->select('curso_id')
						->where('profesor_id', $profesor->id)
						->get();
					if(sizeof($prof) > 0)
						array_push($curso_prof, $prof);
				}
			}

			foreach($curso_prof as $prof_aux){
				foreach($prof_aux as $prof){
					$tupla = array();
					$curso = DB::table('cursos as c')
						->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
						->join('coordinacions as co','co.id','=','cc.coordinacion_id')
						->where([['c.id','=',$prof->curso_id],['co.id','=',$coordinacion_id]])
						->get();
							
					if(sizeof($curso) > 0){
						$profesores = DB::table('profesor_curso')
							->join('profesors','profesors.id','=','profesor_curso.profesor_id')
							->select('profesors.nombres','profesors.apellido_paterno','profesors.apellido_materno')
							->where('profesor_curso.curso_id','=',$prof->curso_id)
							->get();
						array_push($tupla, $curso[0]);
						array_push($tupla, $profesores);
						array_push($datos, $tupla);
						}
					}
			}
		}


		$semestre_anio = DB::table('cursos')
            ->select('semestre_anio')
            ->get();

		$semestres = array();
        foreach($semestre_anio as $semestre){
            if(!in_array($semestre,$semestres)){
                array_push($semestres,$semestre);
            }
        }
        sort($semestres);
        $reversed = array_reverse($semestres);

        Session::put('sesion','area');
        Session::put('url','area');

		$datos_coordinacion = DB::table('coordinacions')
			      ->select(['id','nombre_coordinacion'])
            ->where([['id',$coordinacion_id]])
            ->get();
		
        return view('pages.homeArea')
            ->with('datos',$datos)
            ->with('semestre_anio',$reversed)
            ->with('coordinacion',$datos_coordinacion[0]->nombre_coordinacion)
            ->with('coordinacion_id',$datos_coordinacion[0]->id);

	}

    public function participantes(Request $request,$curso_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
      $participantes = DB::table('participante_curso')
          ->where([['curso_id',$curso_id]])
          ->get();
      $curso = Curso::findOrFail($curso_id);
      $users = array();
      if(sizeof($participantes) == 0){
        return redirect()->back()->with('warning','Por el momento no hay alumnos inscritos en el curso' )->withInput($request->input());
      }
      foreach($participantes as $participante){
          $user = DB::table('profesors')
              ->where([['id',$participante->profesor_id]])
              ->get();
          array_push($users, $user[0]);
      }
      return view('pages.participante')
          ->with('curso',$curso)
          ->with('users',$users)
          ->with('participantes',$participantes);
    }

	public function buscarInstructor (Request $request, int $curso_id){
    if (Auth::guest()) {
      return redirect()->route('coordinador.login');
    }
    $curso = Curso::findOrFail($curso_id);
    $profesores = array();
    $words=explode(" ", $request->pattern);
    $words_num = sizeof($words);
    for ($AP=1; $AP <= $words_num; $AP++) {
      for ($AM=0; $AM <= $words_num-$AP; $AM++) {
        $N = $words_num-$AP-$AM;
        if ($AM==0 and $N==0) {
          $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%')))")->get();
          if($profesor->isNotEmpty())
            array_push($profesores, $profesor);
        }elseif ($AM>0 and $N==0) {
          $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%'))) AND (unaccent(lower(apellido_materno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP, $AM))."%')))")->get();
          if($profesor->isNotEmpty())
            array_push($profesores, $profesor);
        }elseif ($AM==0 and $N>0){
          $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(nombres)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP+$AM))."%'))) AND (unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%')))")->get();
          if($profesor->isNotEmpty())
            array_push($profesores, $profesor);
        }else{
          $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(nombres)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP+$AM))."%'))) AND (unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, 0, $AP))."%'))) AND (unaccent(lower(apellido_materno)) LIKE unaccent(lower('%".implode(' ', array_slice($words, $AP, $AM))."%')))")->get();
          if($profesor->isNotEmpty())
            array_push($profesores, $profesor);
        }
      }
    }
    $curso_prof = array();
    $aux = array();
    foreach($profesores as $profesor_aux){
        foreach($profesor_aux as $profesor){
            $prof = ParticipantesCurso::where('profesor_id', $profesor->id)
              ->where('curso_id',$curso_id)
              ->get();
            if($prof->isNotEmpty())
                array_push($curso_prof, $prof);
        }
    }
    $datos = array();
    foreach($curso_prof as $prof_aux){
        foreach($prof_aux as $prof){
            $dato = ParticipantesCurso::findOrFail($prof->id);
            if(!in_array($dato,$datos))
              array_push($datos, $dato);
        }
    }
    return view('pages.eval')
        ->with('participantes',$datos)
        ->with('curso_id',$curso->id)
        ->with('nombre_curso', $curso->getCatalogoCurso()->nombre_curso);
  }

    public function evaluacion(int $curso_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
      $curso = Curso::findOrFail($curso_id);
      return view('pages.eval')
        ->with('nombre_curso', $curso->getCatalogoCurso()->nombre_curso)
        ->with('participantes', $curso->getParticipantes())
        ->with('curso_id', $curso->id);
    }

    public function evaluacionVista(int $participante_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
    // TODO:Pasar tipo del curso, por si es seminario
    $participante = ParticipantesCurso::findOrFail($participante_id);
    $evaluacion = EvaluacionCurso::where('participante_curso_id', $participante->id)->get()->first();
    if($evaluacion){
      return redirect()->route('area.evaluacion', $participante->curso_id)->with('warning', 'El participante ya ha contestado la encuesta por primera vez. Presione el botón de Modificar Evaluación Final de Curso.');
    }
    $curso = $participante->getCurso();

    return view("pages.evaluacion_nueva")
      ->with("participante_nombre",$participante->getProfesor()->getNombre())
      ->with("participante_id",$participante->id)
      ->with('instructores_cadena', $curso->getCadenaInstructores())
      ->with('instructores', $curso->getProfesoresCurso())
      ->with('fecha', $curso->getToday())
      ->with('nombre_curso', $curso->getCatalogoCurso()->nombre_curso);
	}

    public function saveFinal_Curso(Request $request, int $participante_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
    $participante = ParticipantesCurso::findOrFail($participante_id);
    $curso = Curso::findOrFail($participante->curso_id);
    $instructores = $curso->getProfesoresCurso();
    foreach($instructores as $instructor){
      $evaluacion_inst = new EvaluacionInstructor();
      $evaluacion_inst->instructor_id = $instructor->id;
      $evaluacion_inst->participante_id = $participante->id;
      $evaluacion_inst->p1 = $request->{"i_".$instructor->id."_p1"};
      $evaluacion_inst->p2 = $request->{"i_".$instructor->id."_p2"};
      $evaluacion_inst->p3 = $request->{"i_".$instructor->id."_p3"};
      $evaluacion_inst->p4 = $request->{"i_".$instructor->id."_p4"};
      $evaluacion_inst->p5 = $request->{"i_".$instructor->id."_p5"};
      $evaluacion_inst->p6 = $request->{"i_".$instructor->id."_p6"};
      $evaluacion_inst->p7 = $request->{"i_".$instructor->id."_p7"};
      $evaluacion_inst->p8 = $request->{"i_".$instructor->id."_p8"};
      $evaluacion_inst->p9 = $request->{"i_".$instructor->id."_p9"};
      $evaluacion_inst->p10 = $request->{"i_".$instructor->id."_p10"};
      $evaluacion_inst->p11 = $request->{"i_".$instructor->id."_p11"};
      $evaluacion_inst->save();
    }
    $evaluacion = new EvaluacionCurso();
    $evaluacion->participante_curso_id = $participante->id;
    $evaluacion->p1_1 = $request->p1_1;
    $evaluacion->p1_2 = $request->p1_2;
    $evaluacion->p1_3 = $request->p1_3;
    $evaluacion->p1_4 = $request->p1_4;
    $evaluacion->p1_5 = $request->p1_5;
    $evaluacion->p2_1 = $request->p2_1;
    $evaluacion->p2_2 = $request->p2_2;
    $evaluacion->p2_3 = $request->p2_3;
    $evaluacion->p2_4 = $request->p2_4;
    $evaluacion->p3_1 = $request->p3_1;
    $evaluacion->p3_2 = $request->p3_2;
    $evaluacion->p3_3 = $request->p3_3;
    $evaluacion->p3_4 = $request->p3_4;
    $evaluacion->p7 = $request->p7;
    $evaluacion->p8 = $request->p8;
    $evaluacion->p9 = $request->p9;
    $evaluacion->sug = $request->sug;
    $evaluacion->otros = $request->otros;
    $evaluacion->conocimiento = $request->conocimiento;
    $evaluacion->tematica = $request->tematica;
    $evaluacion->horarios = $request->horarios;
    $evaluacion->horarioi = $request->horarioi;
    $evaluacion->save();
    return redirect()->route('area.evaluacion',$participante->curso_id)
      ->with('success','Encuesta guardada correctamente');
  }
// TODO: Verificar y eliminar el método
//     public function saveFinal_Seminario(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
//         $promedio_p1 = new EvaluacionFinalSeminario;
//         $correo = new EvaluacionFinalSeminario;

// 		$participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
//         if(sizeof($participante) > 0){
//             $evaluacion_id = DB::table('_evaluacion_final_seminario')
//                 ->select('id')
//                 ->where([['participante_curso_id',$participante[0]->id],['curso_id',$curso_id]])
//                 ->get();
//             if(sizeof($evaluacion_id) > 0){
//                 $eval_fcurso = EvaluacionFinalSeminario::find($evaluacion_id[0]->id);
//                 $eval_fcurso->delete();
//             }
//         }
//         $eval_fseminario = new EvaluacionFinalSeminario;
// 		try{
// 		  	$eval_fseminario->participante_curso_id=$participante[0]->id;
// 			$eval_fseminario->curso_id = $curso_id;
			
			
// 			//1. DESARROLLO DEL CURSO
// 			$eval_fseminario->p1_1 = $request->p1_1;
// 			$eval_fseminario->p1_2 = $request->p1_2;
// 			$eval_fseminario->p1_3 = $request->p1_3;
// 			$eval_fseminario->p1_4 = $request->p1_4;
// 			$eval_fseminario->p1_5 = $request->p1_5;

// 			//2. AUTOEVALUACION
// 			$eval_fseminario->p2_1 = $request->p2_1;
// 			$eval_fseminario->p2_2 = $request->p2_2;
// 			$eval_fseminario->p2_3 = $request->p2_3;
// 			$eval_fseminario->p2_4 = $request->p2_4;
// 			//3. COORDINACION DEL CURSO
// 			$eval_fseminario->p3_1 = $request->p3_1;
// 			$eval_fseminario->p3_2 = $request->p3_2;
// 			$eval_fseminario->p3_3 = $request->p3_3;
// 			$eval_fseminario->p3_4 = $request->p3_4;
// 			//4. FACILITADOR(A) DEL SEMINARIO
// 			$eval_fseminario->p4_1 = $request->p4_1;
// 			$eval_fseminario->p4_2 = $request->p4_2;
// 			$eval_fseminario->p4_3 = $request->p4_3;
// 			$eval_fseminario->p4_4 = $request->p4_4;
// 			$eval_fseminario->p4_5 = $request->p4_5;
// 			$eval_fseminario->p4_6 = $request->p4_6;
// 			$eval_fseminario->p4_7 = $request->p4_7;
// 			$eval_fseminario->p4_8 = $request->p4_8;
// 			$eval_fseminario->p4_9 = $request->p4_9;
// 			$eval_fseminario->p4_10 = $request->p4_10;
// 			$eval_fseminario->p4_11 = $request->p4_11;
// 			//5. INSTRUCTOR DOS
// 			$eval_fseminario->p5_1 = $request->p5_1;
// 			$eval_fseminario->p5_2 = $request->p5_2;
// 			$eval_fseminario->p5_3 = $request->p5_3;
// 			$eval_fseminario->p5_4 = $request->p5_4;
// 			$eval_fseminario->p5_5 = $request->p5_5;
// 			$eval_fseminario->p5_6 = $request->p5_6;
// 			$eval_fseminario->p5_7 = $request->p5_7;
// 			$eval_fseminario->p5_8 = $request->p5_8;
// 			$eval_fseminario->p5_9 = $request->p5_9;
// 			$eval_fseminario->p5_10 = $request->p5_10;
// 			$eval_fseminario->p5_11 = $request->p5_11;
// 			$promedio_p5=[
// 				$eval_fseminario->p5_1,
// 				$eval_fseminario->p5_2,
// 				$eval_fseminario->p5_3,
// 				$eval_fseminario->p5_4,
// 				$eval_fseminario->p5_5,
// 				$eval_fseminario->p5_6,
// 				$eval_fseminario->p5_7,
// 				$eval_fseminario->p5_8,
// 				$eval_fseminario->p5_9,
// 				$eval_fseminario->p5_10,
// 				$eval_fseminario->p5_11
// 			];
// 			//6. INSTRUCTOR TRES
// 			$eval_fseminario->p6_1 = $request->p6_1;
// 			$eval_fseminario->p6_2 = $request->p6_2;
// 			$eval_fseminario->p6_3 = $request->p6_3;
// 			$eval_fseminario->p6_4 = $request->p6_4;
// 			$eval_fseminario->p6_5 = $request->p6_5;
// 			$eval_fseminario->p6_6 = $request->p6_6;
// 			$eval_fseminario->p6_7 = $request->p6_7;
// 			$eval_fseminario->p6_8 = $request->p6_8;
// 			$eval_fseminario->p6_9 = $request->p6_9;
// 			$eval_fseminario->p6_10 = $request->p6_10;
// 			$eval_fseminario->p6_11 = $request->p6_11;
// 			$promedio_p6=[
// 				$eval_fseminario->p6_1,
// 				$eval_fseminario->p6_2,
// 				$eval_fseminario->p6_3,
// 				$eval_fseminario->p6_4,
// 				$eval_fseminario->p6_5,
// 				$eval_fseminario->p6_6,
// 				$eval_fseminario->p6_7,
// 				$eval_fseminario->p6_8,
// 				$eval_fseminario->p6_9,
// 				$eval_fseminario->p6_10,
// 				$eval_fseminario->p6_11
// 			];
// 			//6.¿RECOMENDARÍA EL CURSO A OTROS PROFESORES?
// 			$eval_fseminario->p7 = $request->p7;
// 			//7. ¿CÓMO SE ENTERÓ DEL CURSO?
// 			$eval_fseminario->p8 = $request->p8;

// 			//Lo que me aportó el seminario fue:
// 			$eval_fseminario->aporto = $request->aporto;
// 			//Sugerencias y recomendaciones:	
// 			$eval_fseminario->sug = $request->sug;
// 			//¿Qué otros cursos, talleres, seminarios o temáticos le gustaría que se impartiesen o tomasen en cuenta para próximas actividades?
// 			$eval_fseminario->otros = $request->otros;
// 			//ÁREA DE CONOCIMIENTO
// 			$eval_fseminario->conocimiento = $request->conocimiento;
// 			//Temáticas:	
// 			$eval_fseminario->tematica = $request->tematica;
// 			//¿En qué horarios le gustaría que se impartiesen los cursos, talleres, seminarios o diplomados?
// 			//Horarios Semestrales:
// 			$eval_fseminario->horarios = $request->horarios;	
// 			//Horarios Intersemestrales:
// 			$eval_fseminario->horarioi = $request->horarioi;

//             $string_vals = ['mejor','sug','otros','conocimiento','tematica','horarios','horarioi'];

//             foreach($eval_fseminario->getAttributes() as $key => $value){
//                 if($value == null){
//                     if($key == 'p7'){
//                         $eval_fseminario->$key = -1;
//                     }else if(in_array($key,$string_vals,TRUE)){
//                         $eval_fseminario->$key = '';
//                     }else if($key == 'p8[0]'){
//                         $eval_fseminario->$key = [''];
//                     }else{
//                         $eval_fseminario->$key = 0;
//                     }
//                 }
//             }


// 			$eval_fseminario->save();

// 		} catch(\Exception $e){

// 			//En caso de que no se haya evaluado correctamente el curso regresamos a la vista anterior indicando que la evaluación fue errónea
// 			Session::flash('message','Favor de contestar todas las preguntas del formulario');
// 			Session::flash('alert-class', 'alert-danger'); 

// 			return redirect()->back()->withInput($request->input());
// 		}

// 		  //Pasos despreciados en la version actual, usados para obtener el promedio de toda la evaluación del curso
//         $promedio_p1 = [
//             $eval_fseminario->p1_1,
//             $eval_fseminario->p1_2,
//             $eval_fseminario->p1_3,
//             $eval_fseminario->p1_4,
//             $eval_fseminario->p1_5];
// $promedio_p2 =[
//             $eval_fseminario->p2_1,
//             $eval_fseminario->p2_2,
//             $eval_fseminario->p2_3,
//             $eval_fseminario->p2_4];
// $promedio_p3=[
//             $eval_fseminario->p3_1,
//             $eval_fseminario->p3_2,
//             $eval_fseminario->p3_3,
//             $eval_fseminario->p3_4];
// $promedio_p4=[
//             $eval_fseminario->p4_1,
//             $eval_fseminario->p4_2,
//             $eval_fseminario->p4_3,
//             $eval_fseminario->p4_4,
//             $eval_fseminario->p4_5,
//             $eval_fseminario->p4_6,
//             $eval_fseminario->p4_7,
//             $eval_fseminario->p4_8,
//             $eval_fseminario->p4_9,
//             $eval_fseminario->p4_10,
//             $eval_fseminario->p4_11];
//             $promedio=[
//                 $eval_fseminario->p1_1,
//                 $eval_fseminario->p1_2,
//                 $eval_fseminario->p1_3,
//                 $eval_fseminario->p1_4,
//                 $eval_fseminario->p1_5,
//                 $eval_fseminario->p2_1,
//                 $eval_fseminario->p2_2,
//                 $eval_fseminario->p2_3,
//                 $eval_fseminario->p2_4,
//                 $eval_fseminario->p3_1,
//                 $eval_fseminario->p3_2,
//                 $eval_fseminario->p3_3,
//                 $eval_fseminario->p3_4,
//                 $eval_fseminario->p4_1,
//                 $eval_fseminario->p4_2,
//                 $eval_fseminario->p4_3,
//                 $eval_fseminario->p4_4,
//                 $eval_fseminario->p4_5,
//                 $eval_fseminario->p4_6,
//                 $eval_fseminario->p4_7,
//                 $eval_fseminario->p4_8,
//                 $eval_fseminario->p4_9,
//                 $eval_fseminario->p4_10,
//                 $eval_fseminario->p4_11
//             ];

//         $p1=collect($promedio_p1)->average()*2*10;
//         $p2=collect($promedio_p2)->average()*2*10;
//         $p3=collect($promedio_p3)->average()*2*10;
//         $p4=collect($promedio_p4)->average()*2*10;
//         $pg=collect($promedio)->average()*2*10;
        
//           //Actualizar tabla en la bd
//         DB::table('participante_curso')
//             ->where('id', $participante[0]->id)
//             ->where('curso_id',$curso_id)
// 		    ->update(['contesto_hoja_evaluacion' => true]);

// 		//Actualizar campo de hoja de evaluacion
// 		DB::table('participante_curso')
// 			->where('id', $participante[0]->id)
// 			->where('curso_id',$curso_id)
// 			->update(['contesto_hoja_evaluacion' => true]);

	
//         return redirect()->route('cd.evaluacion',[$curso_id]);
//     }

	public function modificarEvaluacion(int $participante_id){
    if (Auth::guest()) {
      return redirect()->route('coordinador.login');
    }
    $participante = ParticipantesCurso::findOrFail($participante_id);
    $evaluacion = EvaluacionCurso::where('participante_curso_id', $participante->id)->get()->first();
    if(!$evaluacion){
      return redirect()->route('area.evaluacion', $participante->curso_id)
        ->with('warning', 'El participante aún no ha contestado la encuesta por primera vez. Presione el botón de Evaluación Final de Curso para hacerlo.');
    }
    $curso = $participante->getCurso();

    return view("pages.evaluacion_modificar")
      ->with("participante_nombre",$participante->getProfesor()->getNombre())
      ->with("participante_id",$participante->id)
      ->with('evaluacion', $evaluacion)
      ->with('instructores_cadena', $curso->getCadenaInstructores())
      ->with('instructores', $curso->getProfesoresCurso())
      ->with('fecha', $curso->getToday())
      ->with('nombre_curso', $curso->getCatalogoCurso()->nombre_curso);
  }

  public function eliminarEvaluacion(int $participante_id){
    if (Auth::guest()) {
      return redirect()->route('coordinador.login');
    }
    $participante = ParticipantesCurso::findOrFail($participante_id);
    $evaluaciones = EvaluacionCurso::where('participante_curso_id', $participante->id)->get();
    if($evaluaciones->isEmpty())
      return redirect()->back()->with('warning',
        'El participante no tiene evaluaciones');
    foreach($evaluaciones as $evaluacion)
      $evaluacion->delete();
    $participante->contesto_hoja_evaluacion=false;
    $participante->save();
    $evaluaciones = EvaluacionInstructor::where('participante_id', $participante->id)->get();
    if($evaluaciones->isNotEmpty()){
      foreach($evaluaciones as $evaluacion)
        $evaluacion->delete();
    }
    return redirect()->back()->with('success','Evaluación eliminada');
  }

	public function changeFinal_Curso(Request $request,int $participante_id,int $encuesta_id){
    if (Auth::guest()) {
      return redirect()->route('coordinador.login');
    }
      $participante = ParticipantesCurso::findOrFail($participante_id);
      $curso = Curso::findOrFail($participante->curso_id);
      $instructores = $curso->getProfesoresCurso();
      foreach($instructores as $instructor){
        $evaluacion_inst = EvaluacionInstructor::where('instructor_id', $instructor->id)
          ->where('participante_id', $participante->id)->get()->first();
        if(!isset($evaluacion_inst)){
          $evaluacion_inst = new EvaluacionInstructor();
          $evaluacion_inst->instructor_id = $instructor->id;
          $evaluacion_inst->participante_id = $participante->id;
        }
        $evaluacion_inst->p1 = $request->{"i_".$instructor->id."_p1"};
        $evaluacion_inst->p2 = $request->{"i_".$instructor->id."_p2"};
        $evaluacion_inst->p3 = $request->{"i_".$instructor->id."_p3"};
        $evaluacion_inst->p4 = $request->{"i_".$instructor->id."_p4"};
        $evaluacion_inst->p5 = $request->{"i_".$instructor->id."_p5"};
        $evaluacion_inst->p6 = $request->{"i_".$instructor->id."_p6"};
        $evaluacion_inst->p7 = $request->{"i_".$instructor->id."_p7"};
        $evaluacion_inst->p8 = $request->{"i_".$instructor->id."_p8"};
        $evaluacion_inst->p9 = $request->{"i_".$instructor->id."_p9"};
        $evaluacion_inst->p10 = $request->{"i_".$instructor->id."_p10"};
        $evaluacion_inst->p11 = $request->{"i_".$instructor->id."_p11"};
        $evaluacion_inst->save();
      }
      $evaluacion = EvaluacionCurso::findOrFail($encuesta_id);
      $evaluacion->p1_1 = $request->p1_1;
      $evaluacion->p1_2 = $request->p1_2;
      $evaluacion->p1_3 = $request->p1_3;
      $evaluacion->p1_4 = $request->p1_4;
      $evaluacion->p1_5 = $request->p1_5;
      $evaluacion->p2_1 = $request->p2_1;
      $evaluacion->p2_2 = $request->p2_2;
      $evaluacion->p2_3 = $request->p2_3;
      $evaluacion->p2_4 = $request->p2_4;
      $evaluacion->p3_1 = $request->p3_1;
      $evaluacion->p3_2 = $request->p3_2;
      $evaluacion->p3_3 = $request->p3_3;
      $evaluacion->p3_4 = $request->p3_4;
      $evaluacion->p7 = $request->p7;
      $evaluacion->p8 = $request->p8;
      $evaluacion->p9 = $request->p9;
      $evaluacion->sug = $request->sug;
      $evaluacion->otros = $request->otros;
      $evaluacion->conocimiento = $request->conocimiento;
      $evaluacion->tematica = $request->tematica;
      $evaluacion->horarios = $request->horarios;
      $evaluacion->horarioi = $request->horarioi;
      $evaluacion->save();
      return redirect()->route('area.evaluacion',$participante->curso_id)
        ->with('success','Encuesta guardada correctamente');
    }

	// public function changeFinal_Seminario(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
  //       $participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
  //       return $this->saveFinal_Seminario($request,$profesor_id,$curso_id, $catalogoCurso_id);
  //   }


}
