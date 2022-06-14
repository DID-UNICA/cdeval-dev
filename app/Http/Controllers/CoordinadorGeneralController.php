<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Curso;
use App\CatalogoCurso;
use App\Coordinacion;

use App\Profesor;
use App\ProfesoresCurso;
use App\ParticipantesCurso;
use App\EvaluacionFinalCurso;
use App\EvaluacionFinalSeminario;
use App\EvaluacionCurso;
use App\EvaluacionInstructor;
use Illuminate\Support\Facades\Auth;
/*use App\EvaluacionXCurso;
use App\EvaluacionXSeminario;
use App\Coordinacion;*/
use Illuminate\Support\Facades\Storage;
use Mail;
use PDF;
use DB; 
use Carbon\Carbon;

class CoordinadorGeneralController extends Controller
{

    /**
     * Función que retorna a la vista de super usuario
     * @return Vista super usuario
     */
    public function index(){
        if (Auth::guest()) {
          return redirect()->route('coordinador.login');
        }
        $semestre_anio = DB::table('cursos')
            ->select('semestre_anio')
            ->get();
        
        $coordinaciones = DB::table('coordinacions')
            ->select('id','nombre_coordinacion')
            ->get();

        $semestres = array();
        foreach($semestre_anio as $semestre){
            if(!in_array($semestre,$semestres)){
                array_push($semestres,$semestre);
            }
        }
        sort($semestres);
        $reversed = array_reverse($semestres);

        Session::put('sesion','cd');
        Session::put('url','CD');

        return view('pages.homeCD')
            ->with('semestre_anio',$reversed)
            ->with('coordinaciones',$coordinaciones); //Route -> coordinador
    }

    public function area(String $semestreEnv, String $periodo, String $coordinacion_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $fecha=$semestreEnv;
        $semestre=explode('-',$fecha);
        $periodo=$periodo;
        $coordinacion = Coordinacion::findOrFail($coordinacion_id);

        $cursos = 0;

        if($coordinacion->id == 1 || $coordinacion->id == 6)
            $cursos = DB::table('cursos')
                ->join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
                ->join('coordinacions','coordinacions.id','=','coordinacion_id')
                ->select('catalogo_cursos.nombre_curso','cursos.id')
                ->where([['cursos.semestre_anio',$semestre[0]],['cursos.semestre_pi',$semestre[1]],['cursos.semestre_si',$periodo]])
                ->select('cursos.id')
                ->get();
        else
            $cursos = DB::table('cursos')
                ->join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
                ->join('coordinacions','coordinacions.id','=','coordinacion_id')
                ->select('catalogo_cursos.nombre_curso','cursos.id')
                ->where([['cursos.semestre_anio',$semestre[0]],['cursos.semestre_pi',$semestre[1]],['cursos.semestre_si',$periodo],['coordinacions.id',$coordinacion->id]])
                ->select('cursos.id')
                ->get();

        $tmp = array();
        foreach($cursos as $curso){
            array_push($tmp, $curso->id);
        }
        $cursos = Curso::whereIn('id', $tmp)->get();
        return view('pages.area')
            ->with('cursos',$cursos)
            ->with('coordinacion',$coordinacion->nombre_coordinacion)
            ->with('coordinacion_id',$coordinacion->id)
            ->with('semestre',$semestreEnv)
            ->with('periodo',$periodo);

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

    public function buscarCurso(Request $request, $coordinacion_id,$semestreEnv,$periodo){
      if (Auth::guest())
        return redirect()->route('coordinador.login');
      $semestre = explode('-',$semestreEnv);

      $coordinacion = Coordinacion::findOrFail($coordinacion_id);
      if($coordinacion->id == 1 || $coordinacion->id == 6){
        if($request->type == 'nombre'){
          $cursos = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
            ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
            ->whereRaw("lower(unaccent(nombre_curso)) ILIKE lower(unaccent('%".$request->pattern."%'))")
            ->where([['c.semestre_anio',$semestre[0]],['c.semestre_pi',$semestre[1]],['c.semestre_si',$periodo]])
            ->select('c.id')
            ->get();
        }else if ($request->type == 'instructor'){
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
          $cursos = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
            ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
            ->join('profesor_curso as pc', 'c.id', '=', 'pc.curso_id')
            ->where([['c.semestre_anio',$semestre[0]],['c.semestre_pi',$semestre[1]],['c.semestre_si',$periodo]])
            ->whereIn('pc.profesor_id', $tmp)
            ->select('c.id')
            ->get();
        }
      } else {
        if($request->type == 'nombre'){
          $cursos = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
            ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
            ->whereRaw("lower(unaccent(nombre_curso)) ILIKE lower(unaccent('%".$request->pattern."%'))")
            ->where('co.id','=',$coordinacion_id)
            ->where([['c.semestre_anio',$semestre[0]],['c.semestre_pi',$semestre[1]],['c.semestre_si',$periodo]])
            ->select('c.id')
            ->get();
        }else if ($request->type == 'instructor'){
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
          $cursos = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
            ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
            ->join('profesor_curso as pc', 'c.id', '=', 'pc.curso_id')
            ->where('co.id','=',$coordinacion_id)
            ->where([['c.semestre_anio',$semestre[0]],['c.semestre_pi',$semestre[1]],['c.semestre_si',$periodo]])
            ->whereIn('pc.profesor_id', $tmp)
            ->select('c.id')
            ->get();
        }
      }
      $tmp = array();
      foreach($cursos as $curso){
        array_push($tmp, $curso->id);
      }
      $cursos = Curso::whereIn('id', $tmp)->get();
      $semestre_anio = DB::table('cursos')
            ->select('semestre_anio')
            ->get();

		  $semestres = array();
      foreach($semestre_anio as $semestre){
          if(!in_array($semestre,$semestres))
            array_push($semestres,$semestre);
      }
      sort($semestres);
      $reversed = array_reverse($semestres);

      Session::put('sesion','cd');
      Session::put('url','CD');
      return view('pages.area')
        ->with('cursos',$cursos)
        ->with('periodo',$periodo)
        ->with('semestre',$semestreEnv)
        ->with('semestre_anio',$reversed)
        ->with('coordinacion',$coordinacion->nombre_coordinacion)
        ->with('coordinacion_id',$coordinacion->id);
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

    public function evaluacionVista(int $participante_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
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
      $participante->contesto_hoja_evaluacion = true;
      $participante->save();
      return redirect()->route('area.evaluacion',$participante->curso_id)
        ->with('success','Encuesta guardada correctamente');
    }

    public function saveFinal_Seminario(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $promedio_p1 = new EvaluacionFinalSeminario;
        $correo = new EvaluacionFinalSeminario;

		$participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();

        if(sizeof($participante) > 0){
            $evaluacion_id = DB::table('_evaluacion_final_seminario as e')
                ->join('participante_curso as p','p.id','=','e.participante_curso_id')
                ->select('e.id')
                ->where([['e.participante_curso_id',$participante[0]->id],['p.curso_id',$curso_id]])
                ->get();
            if(sizeof($evaluacion_id) > 0){
                $eval_fcurso = EvaluacionFinalSeminario::find($evaluacion_id[0]->id);
                $eval_fcurso->delete();
            }
        }
        $eval_fseminario = new EvaluacionFinalSeminario;
	    try{
		  	$eval_fseminario->participante_curso_id=$participante[0]->id;
			$eval_fseminario->curso_id = $curso_id;
			
			
			//1. DESARROLLO DEL CURSO
			$eval_fseminario->p1_1 = $request->p1_1;
			$eval_fseminario->p1_2 = $request->p1_2;
			$eval_fseminario->p1_3 = $request->p1_3;
			$eval_fseminario->p1_4 = $request->p1_4;
			$eval_fseminario->p1_5 = $request->p1_5;

			//2. AUTOEVALUACION
			$eval_fseminario->p2_1 = $request->p2_1;
			$eval_fseminario->p2_2 = $request->p2_2;
			$eval_fseminario->p2_3 = $request->p2_3;
			$eval_fseminario->p2_4 = $request->p2_4;
			//3. COORDINACION DEL CURSO
			$eval_fseminario->p3_1 = $request->p3_1;
			$eval_fseminario->p3_2 = $request->p3_2;
			$eval_fseminario->p3_3 = $request->p3_3;
			$eval_fseminario->p3_4 = $request->p3_4;
			//4. FACILITADOR(A) DEL SEMINARIO
			$eval_fseminario->p4_1 = $request->p4_1;
			$eval_fseminario->p4_2 = $request->p4_2;
			$eval_fseminario->p4_3 = $request->p4_3;
			$eval_fseminario->p4_4 = $request->p4_4;
			$eval_fseminario->p4_5 = $request->p4_5;
			$eval_fseminario->p4_6 = $request->p4_6;
			$eval_fseminario->p4_7 = $request->p4_7;
			$eval_fseminario->p4_8 = $request->p4_8;
			$eval_fseminario->p4_9 = $request->p4_9;
			$eval_fseminario->p4_10 = $request->p4_10;
			$eval_fseminario->p4_11 = $request->p4_11;
			//5. INSTRUCTOR DOS
			$eval_fseminario->p5_1 = $request->p5_1;
			$eval_fseminario->p5_2 = $request->p5_2;
			$eval_fseminario->p5_3 = $request->p5_3;
			$eval_fseminario->p5_4 = $request->p5_4;
			$eval_fseminario->p5_5 = $request->p5_5;
			$eval_fseminario->p5_6 = $request->p5_6;
			$eval_fseminario->p5_7 = $request->p5_7;
			$eval_fseminario->p5_8 = $request->p5_8;
			$eval_fseminario->p5_9 = $request->p5_9;
			$eval_fseminario->p5_10 = $request->p5_10;
			$eval_fseminario->p5_11 = $request->p5_11;
			$promedio_p5=[
				$eval_fseminario->p5_1,
				$eval_fseminario->p5_2,
				$eval_fseminario->p5_3,
				$eval_fseminario->p5_4,
				$eval_fseminario->p5_5,
				$eval_fseminario->p5_6,
				$eval_fseminario->p5_7,
				$eval_fseminario->p5_8,
				$eval_fseminario->p5_9,
				$eval_fseminario->p5_10,
				$eval_fseminario->p5_11
			];
			//6. INSTRUCTOR TRES
			$eval_fseminario->p6_1 = $request->p6_1;
			$eval_fseminario->p6_2 = $request->p6_2;
			$eval_fseminario->p6_3 = $request->p6_3;
			$eval_fseminario->p6_4 = $request->p6_4;
			$eval_fseminario->p6_5 = $request->p6_5;
			$eval_fseminario->p6_6 = $request->p6_6;
			$eval_fseminario->p6_7 = $request->p6_7;
			$eval_fseminario->p6_8 = $request->p6_8;
			$eval_fseminario->p6_9 = $request->p6_9;
			$eval_fseminario->p6_10 = $request->p6_10;
			$eval_fseminario->p6_11 = $request->p6_11;
			$promedio_p6=[
				$eval_fseminario->p6_1,
				$eval_fseminario->p6_2,
				$eval_fseminario->p6_3,
				$eval_fseminario->p6_4,
				$eval_fseminario->p6_5,
				$eval_fseminario->p6_6,
				$eval_fseminario->p6_7,
				$eval_fseminario->p6_8,
				$eval_fseminario->p6_9,
				$eval_fseminario->p6_10,
				$eval_fseminario->p6_11
			];
			//6.¿RECOMENDARÍA EL CURSO A OTROS PROFESORES?
			$eval_fseminario->p7 = $request->p7;
			//7. ¿CÓMO SE ENTERÓ DEL CURSO?
			$eval_fseminario->p8 = $request->p8;

			//Lo que me aportó el seminario fue:
			$eval_fseminario->aporto = $request->aporto;
			//Sugerencias y recomendaciones:	
			$eval_fseminario->sug = $request->sug;
			//¿Qué otros cursos, talleres, seminarios o temáticos le gustaría que se impartiesen o tomasen en cuenta para próximas actividades?
			$eval_fseminario->otros = $request->otros;
			//ÁREA DE CONOCIMIENTO
			$eval_fseminario->conocimiento = $request->conocimiento;
			//Temáticas:	
			$eval_fseminario->tematica = $request->tematica;
			//¿En qué horarios le gustaría que se impartiesen los cursos, talleres, seminarios o diplomados?
			//Horarios Semestrales:
			$eval_fseminario->horarios = $request->horarios;	
			//Horarios Intersemestrales:
			$eval_fseminario->horarioi = $request->horarioi;

            $string_vals = ['mejor','sug','otros','conocimiento','tematica','horarios','horarioi'];

            foreach($eval_fseminario->getAttributes() as $key => $value){
                if($value == null){
                    if($key == 'p7'){
                        $eval_fseminario->$key = -1;
                    }else if(in_array($key,$string_vals,TRUE)){
                        $eval_fseminario->$key = '';
                    }else if($key == 'p8[0]'){
                        $eval_fseminario->$key = [''];
                    }else{
                        $eval_fseminario->$key = 0;
                    }
                }
            }


			$eval_fseminario->save();

		} catch(\Exception $e){

			//En caso de que no se haya evaluado correctamente el curso regresamos a la vista anterior indicando que la evaluación fue errónea
			Session::flash('message-warning','Favor de contestar todas las preguntas del formulario');

			return redirect()->back()->withInput($request->input());
		}

		  //Pasos despreciados en la version actual, usados para obtener el promedio de toda la evaluación del curso
        $promedio_p1 = [
            $eval_fseminario->p1_1,
            $eval_fseminario->p1_2,
            $eval_fseminario->p1_3,
            $eval_fseminario->p1_4,
            $eval_fseminario->p1_5];
$promedio_p2 =[
            $eval_fseminario->p2_1,
            $eval_fseminario->p2_2,
            $eval_fseminario->p2_3,
            $eval_fseminario->p2_4];
$promedio_p3=[
            $eval_fseminario->p3_1,
            $eval_fseminario->p3_2,
            $eval_fseminario->p3_3,
            $eval_fseminario->p3_4];
$promedio_p4=[
            $eval_fseminario->p4_1,
            $eval_fseminario->p4_2,
            $eval_fseminario->p4_3,
            $eval_fseminario->p4_4,
            $eval_fseminario->p4_5,
            $eval_fseminario->p4_6,
            $eval_fseminario->p4_7,
            $eval_fseminario->p4_8,
            $eval_fseminario->p4_9,
            $eval_fseminario->p4_10,
            $eval_fseminario->p4_11];
            $promedio=[
                $eval_fseminario->p1_1,
                $eval_fseminario->p1_2,
                $eval_fseminario->p1_3,
                $eval_fseminario->p1_4,
                $eval_fseminario->p1_5,
                $eval_fseminario->p2_1,
                $eval_fseminario->p2_2,
                $eval_fseminario->p2_3,
                $eval_fseminario->p2_4,
                $eval_fseminario->p3_1,
                $eval_fseminario->p3_2,
                $eval_fseminario->p3_3,
                $eval_fseminario->p3_4,
                $eval_fseminario->p4_1,
                $eval_fseminario->p4_2,
                $eval_fseminario->p4_3,
                $eval_fseminario->p4_4,
                $eval_fseminario->p4_5,
                $eval_fseminario->p4_6,
                $eval_fseminario->p4_7,
                $eval_fseminario->p4_8,
                $eval_fseminario->p4_9,
                $eval_fseminario->p4_10,
                $eval_fseminario->p4_11
            ];

        $p1=collect($promedio_p1)->average()*2*10;
        $p2=collect($promedio_p2)->average()*2*10;
        $p3=collect($promedio_p3)->average()*2*10;
        $p4=collect($promedio_p4)->average()*2*10;
        $pg=collect($promedio)->average()*2*10;
        
          //Actualizar tabla en la bd
        DB::table('participante_curso')
            ->where('id', $participante[0]->id)
            ->where('curso_id',$curso_id)
		    ->update(['contesto_hoja_evaluacion' => true]);

		//Actualizar campo de hoja de evaluacion
		DB::table('participante_curso')
			->where('id', $participante[0]->id)
			->where('curso_id',$curso_id)
			->update(['contesto_hoja_evaluacion' => true]);

	
        return redirect()->route('cd.evaluacion',[$curso_id]);
    }

    public function participantes($curso_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $participantes = DB::table('participante_curso')
            ->where([['curso_id',$curso_id]])
            ->get();
        $curso = Curso::find($curso_id);
        $users = array();
        if(sizeof($participantes) == 0){
          return redirect()->back()
            ->with('warning', 'Por el momento no hay alumnos inscritos en el curso');
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

    public function global(String $semestre, String $periodo){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $fecha = $semestre;
        $semestre = explode('-',$fecha);
        $periodo = $periodo;
        
        if(!array_key_exists(1,$semestre))
            return redirect()->back();

        //Obtenemos los cursos correspondientes al semestre elegido por el usuario
        $cursos = DB::table('cursos')
            ->where([['cursos.semestre_anio',$semestre[0]],['cursos.semestre_pi',$semestre[1]],['cursos.semestre_si',$periodo]])
            ->get();
        
        //Indicamos la vista a observar
        $lugar = "pages.reporte_final_global";

        return $this->enviarVista($fecha, $cursos, "", $lugar,1,'cd.index',$periodo);
    }

    /**
     * Función encargada de obtener los cálculos aritméticos de la evaluación global
     * @param $cursos: cursos obtenidos según la selecion del usuario
     * @return Los cálculos aritméticos
     */
    public function calculaAritmetico($cursos){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        //Obtenemos la fecha seleccionada
        $semestre_anio = $cursos[0]->semestre_anio;
        $semestre_pi = $cursos[0]->semestre_pi;
        $semestre_si = $cursos[0]->semestre_si;

        $coordinaciones = DB::table('coordinacions')
            ->select('id','nombre_coordinacion','abreviatura','coordinador','comentarios','usuario','password')
            ->get();

        $catalogo_coordinaciones = array();

        //Obtenemos los cursos de cada coordinación de la fecha seleccionada
        foreach($coordinaciones as $coordinacion){
            $cursos = DB::table('cursos')
                ->join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
                ->select('cursos.id','catalogo_cursos.nombre_curso','catalogo_cursos.tipo','catalogo_id')
                ->where([['catalogo_cursos.coordinacion_id',$coordinacion->id],['cursos.semestre_anio',$semestre_anio],['cursos.semestre_pi',$semestre_pi],['cursos.semestre_si',$semestre_si]])
                ->get();
            
            if(sizeof($cursos)>0){
                array_push($catalogo_coordinaciones,$cursos);
            }
        }

        $contenido_promedio = 0;
        $instructor_promedio = 0;
        $coordinacion_promedio = 0;
        $factor_recomendacion_promedio = 0;
        $tam_coordinacion = 0;
        $cont = 0;
        $num_cursos = 0;

        //Empezamos a iterar cada coordinación
        foreach($catalogo_coordinaciones as $coordinacion){

            //Empezamos a iterar los cursos de cada coordinación
            foreach($coordinacion as $curso){

                $contenido_curso = 0;
                $instructor_curso_1 = 0;
                $instructor_curso_2 = 0;
                $instructor_curso_3 = 0;
                $coordinacion_curso = 0;
                $factor_recomendacion_curso = 0;
                $tam = 0;
                $tam1 = 0;
                $tam2 = 0;
                $tam3 = 0;
                $tam_coord = 0;
                $tam_contenido = 0;
                $tam_recomendacion = 0;

                $num_cursos++;
                $evals = 0;
                //Obtenemos las evaluaciones
                if(strcmp($catalogo_curso[0]->tipo,'S') == 0)
                $evals = DB::table('_evaluacion_final_curso as ec')
                  ->join('participante_curso as pc', 'pc.id', '=', 'ec.participante_curso_id')
                  ->where('pc.curso_id',$curso->id)
                  ->select('ec.*')
                  ->get();
                else            
                  $evals = DB::table('_evaluacion_final_curso as es')
                    ->join('participante_curso as pc', 'pc.id', '=', 'es.participante_curso_id')
                    ->where('pc.curso_id',$curso->id)
                    ->select('es.*')
                    ->get();

                $tam += sizeof($evals);

                //Iteramos las evaluaciones y acumulamos sus valores
                foreach($evals as $eval){

                    if($eval->p1_1 >= 50){
                        $contenido_curso += $eval->p1_1;
                        $tam_contenido++;
                    }
                    if($eval->p1_2 >= 50){
                        $contenido_curso += $eval->p1_2;
                        $tam_contenido++;
                    }
                    if($eval->p1_3 >= 50){
                        $contenido_curso += $eval->p1_3;
                        $tam_contenido++;
                    }
                    if($eval->p1_4 >= 50){
                        $contenido_curso += $eval->p1_4;
                        $tam_contenido++;
                    }
                    if($eval->p1_5 >= 50){
                        $contenido_curso += $eval->p1_5;
                        $tam_contenido++;
                    }

                    if($eval->p3_1 >= 50){
                        $coordinacion_curso += $eval->p3_1;
                        $tam_coord++;
                    }
                    if($eval->p3_2 >= 50){
                        $coordinacion_curso += $eval->p3_2;
                        $tam_coord++;
                    }
                    if($eval->p3_3 >= 50){
                        $coordinacion_curso += $eval->p3_3;
                        $tam_coord++;
                    }
                    if($eval->p3_4 >= 50){
                        $coordinacion_curso += $eval->p3_4;
                        $tam_coord++;
                    }

                    if($eval->p4_1 >= 50){
                        $instructor_curso_1 += $eval->p4_1;
                        $tam1++;
                    }
                    if($eval->p4_2 >= 50){
                        $instructor_curso_1 += $eval->p4_2;
                        $tam1++;
                    }
                    if($eval->p4_3 >= 50){
                        $instructor_curso_1 += $eval->p4_3;
                        $tam1++;
                    }
                    if($eval->p4_4 >= 50){
                        $instructor_curso_1 += $eval->p4_4;
                        $tam1++;
                    }
                    if($eval->p4_5 >= 50){
                        $instructor_curso_1 += $eval->p4_5;
                        $tam1++;
                    }
                    if($eval->p4_6 >= 50){
                        $instructor_curso_1 += $eval->p4_6;
                        $tam1++;
                    }
                    if($eval->p4_7 >= 50){
                        $instructor_curso_1 += $eval->p4_7;
                        $tam1++;
                    }
                    if($eval->p4_8 >= 50){
                        $instructor_curso_1 += $eval->p4_8;
                        $tam1++;
                    }
                    if($eval->p4_9 >= 50){
                        $instructor_curso_1 += $eval->p4_9;
                        $tam1++;
                    }
                    if($eval->p4_10 >= 50){
                        $instructor_curso_1 += $eval->p4_10;
                        $tam1++;
                    }
                    if($eval->p4_11 >= 50){
                        $instructor_curso_1 += $eval->p4_11;
                        $tam1++;
                    }

                    //En caso de tener de que se haya evaluado un segundo instructor acumulamos sus calificaciones
                    if($eval->p5_1 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_1;
                    }
                    if($eval->p5_2 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_2;
                    }
                    if($eval->p5_3 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_3;
                    }
                    if($eval->p5_4 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_4;
                    }
                    if($eval->p5_5 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_5;
                    }
                    if($eval->p5_6 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_6;
                    }
                    if($eval->p5_7 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_7;
                    }
                    if($eval->p5_8 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_8;
                    }
                    if($eval->p5_9 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_9;
                    }
                    if($eval->p5_10 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_10;
                    }
                    if($eval->p5_11 >= 50){
                        $tam2++;
                        $instructor_curso_2 += $eval->p5_11;
                    }

                    //En caso de tener de que se haya evaluado un tercer instructor acumulamos sus calificaciones
                    if($eval->p6_1 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_1;
                    }
                    if($eval->p6_2 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_2;
                    }
                    if($eval->p6_3 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_3;
                    }
                    if($eval->p6_4 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_4;
                    }
                    if($eval->p6_5 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_5;
                    }
                    if($eval->p6_6 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_6;
                    }
                    if($eval->p6_7 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_7;
                    }
                    if($eval->p6_8 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_8;
                    }
                    if($eval->p6_9 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_9;
                    }
                    if($eval->p6_10 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_10;
                    }
                    if($eval->p6_11 >= 50){
                        $tam3++;
                        $instructor_curso_3 += $eval->p6_11;
                    }

                    //incrementamos el número de profesores que recomendaron el curso
                    if(intval($eval->p7) === 1){
                        $factor_recomendacion_curso++;
                        $tam_recomendacion++;
                    }elseif(intval($eval->p7) === 0){
                        $tam_recomendacion++;
                    }
                }
                
                $divisor = 1;
                if($tam2 != 0){
                    $divisor = 2;
                }else{
                    $tam2 = 1;
                }
                if($tam3 != 0){
                    $divisor = 3;
                }else{
                    $tam3 = 1;
                }

                //Aritmetico promedio de los primedios a cada instructor (se obtienen individualmente el de cada instructor de cada curso), ponderado promedio de los cursos (se promedian todos los instructores de cada curso)
                //Juicio Sumario B es promedio de los tres factores y que sea mayor o igual a 80
                if($tam_contenido != 0)
                    $contenido_promedio += $contenido_curso/$tam_contenido;
                if($tam1 != 0)
                    $instructor_promedio += ((($instructor_curso_1/($tam1))+($instructor_curso_2/($tam2))+($instructor_curso_3/($tam3)))/$divisor);
                if($tam_coord != 0)
                    $coordinacion_promedio += ($coordinacion_curso/$tam_coord);
                if($tam_recomendacion != 0)
                    $factor_recomendacion_promedio += ($factor_recomendacion_curso*100/$tam_recomendacion);
            }
        }

        $factor_contenido_aritmetico = round($contenido_promedio / $num_cursos,2);
        $factor_instructor_aritmetico = round($instructor_promedio / $num_cursos,2);
        $factor_coordinacion_aritmetico = round($coordinacion_promedio / $num_cursos,2);
        $factor_recomendacion_aritmetico = round($factor_recomendacion_promedio / $num_cursos,2);

        $aritmetico = [$factor_contenido_aritmetico,$factor_instructor_aritmetico,$factor_coordinacion_aritmetico,$factor_recomendacion_aritmetico];
        return $aritmetico;

    }

    public function descargarPDF($nombres,$periodo,$acreditaron,$inscritos,$contestaron,$factor_ocupacion,$factor_recomendacion,$factor_acreditacion,$positivas,$DP,$DH,$CO,$DI,$Otros,$DPtematicas,$DItematicas,$COtematicas,$DHtematicas,$Otrostematicas,$horarios,$coordinacion,$contenido,$profesors,$instructor,$asistencia,$nombreCoordinacion,$lugar,$factor_contenido_aritmetico,$factor_instructor_aritmetico,$factor_coordinacion_aritmetico,$factor_recomendacion_aritmetico,$semestral){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $envio = 'pages.global-reporte';
        $envioPDF = 'global_'.$periodo.'-'.$semestral;
        Session::flash('tipos','CD');
        if(strcmp($lugar,'pages.reporte_final_area') == 0){
            Session::flash('tipos','area');
            $envioPDF = 'area_'.$nombreCoordinacion.'_periodo';
        }
        //Obtenemos el pdf con los datos calculados
        $pdf = PDF::loadView($envio,array('nombres'=>$nombres,'periodo'=>$periodo,'acreditaron'=>$acreditaron,'inscritos'=>$inscritos,'contestaron'=>$contestaron,'factor_ocupacion'=>$factor_ocupacion,'factor_recomendacion'=>$factor_recomendacion,'factor_acreditacion'=>$factor_acreditacion,'positivas'=>$positivas,'DP'=>$DP,'DH'=>$DH,'CO'=>$CO,'DI'=>$DI,'Otros'=>$Otros,'DPtematicas'=>$DPtematicas,'DItematicas'=>$DItematicas,'COtematicas'=>$COtematicas,'DHtematicas'=>$DHtematicas,'Otrostematicas'=>$Otrostematicas,'horarios'=>$horarios,'coordinacion'=>$coordinacion,'contenido'=>$contenido,'profesors'=>$profesors,'instructor'=>$instructor,'asistencia'=>$asistencia,'nombreCoordinacion'=>$nombreCoordinacion,'aritmetico_contenido'=>$factor_contenido_aritmetico,'aritmetico_instructor'=>$factor_instructor_aritmetico,'aritmetico_coordinacion'=>$factor_coordinacion_aritmetico,'aritmetico_recomendacion'=>$factor_recomendacion_aritmetico));	

        //Retornamos la descarga del pdf
        return $pdf->download($envioPDF.'.pdf');
    }

    public function calculaAritmeticoArea($cursos, $nombreCoordinacion){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $contenido_promedio = 0;
        $instructor_promedio = 0;
        $coordinacion_promedio = 0;
        $factor_recomendacion_promedio = 0;
        $tam_coordinacion = 0;

        //Iteramos cada curso del área seleccionada
        foreach($cursos as $curso){
            $tam_coordinacion++;
            //Obtenemos el catálogo y evaluaciones de dichos cursos
            $catalogo_curso = DB::table('catalogo_cursos')
                ->where('id',$curso->catalogo_id)
                ->get();
            if(strcmp($catalogo_curso[0]->tipo,'S') == 0)
              $evals = DB::table('_evaluacion_final_curso as ec')
                ->join('participante_curso as pc', 'pc.id', '=', 'ec.participante_curso_id')
                ->where('pc.curso_id',$curso->id)
                ->select('ec.*')
                ->get();
            else            
              $evals = DB::table('_evaluacion_final_curso as es')
                ->join('participante_curso as pc', 'pc.id', '=', 'es.participante_curso_id')
                ->where('pc.curso_id',$curso->id)
                ->select('es.*')
                ->get();

            $tam_curso = 0;
            $contenido_curso = 0;
            $instructor_1 = 0;
            $coordinacion_curso = 0;
            $factor_recomendacion_curso = 0;
            $tam1 = 0;
            $tam2 = 0;
            $tam3 = 0;
            $instructor_2 = 0;
            $instructor_3 = 0;
            $tam_contenido = 0;
            $tam_coord = 0;
            $tam_recomendacion = 0;

            //Iteramos las evaluaciones de cada curso y acumulamos las calificaciones de cada rubro
            foreach($evals as $eval){
                $tam_curso++;

                if($eval->p1_1>=50){
                    $contenido_curso += $eval->p1_1;
                    $tam_contenido++;
                }
                if($eval->p1_2>=50){
                    $contenido_curso += $eval->p1_2;
                    $tam_contenido++;
                }
                if($eval->p1_3>=50){
                    $contenido_curso += $eval->p1_3;
                    $tam_contenido++;
                }
                if($eval->p1_4>=50){
                    $contenido_curso += $eval->p1_4;
                    $tam_contenido++;
                }
                if($eval->p1_5>=50){
                    $contenido_curso += $eval->p1_5;
                    $tam_contenido++;
                }

                if($eval->p3_1>=50){
                    $coordinacion_curso += $eval->p3_1;
                    $tam_coord++;
                }
                if($eval->p3_2>=50){
                    $coordinacion_curso += $eval->p3_2;
                    $tam_coord++;
                }
                if($eval->p3_3>=50){
                    $coordinacion_curso += $eval->p3_3;
                    $tam_coord++;
                }
                if($eval->p3_4>=50){
                    $coordinacion_curso += $eval->p3_4;
                    $tam_coord++;
                }

                if($eval->p4_1>=50){
                    $instructor_1 += $eval->p4_1;
                    $tam1++;
                }
                if($eval->p4_2>=50){
                    $instructor_1 += $eval->p4_2;
                    $tam1++;
                }
                if($eval->p4_3>=50){
                    $instructor_1 += $eval->p4_3;
                    $tam1++;
                }
                if($eval->p4_4>=50){
                    $instructor_1 += $eval->p4_4;
                    $tam1++;
                }
                if($eval->p4_5>=50){
                    $instructor_1 += $eval->p4_5;
                    $tam1++;
                }
                if($eval->p4_6>=50){
                    $instructor_1 += $eval->p4_6;
                    $tam1++;
                }
                if($eval->p4_7>=50){
                    $instructor_1 += $eval->p4_7;
                    $tam1++;
                }
                if($eval->p4_8>=50){
                    $instructor_1 += $eval->p4_8;
                    $tam1++;
                }
                if($eval->p4_9>=50){
                    $instructor_1 += $eval->p4_9;
                    $tam1++;
                }
                if($eval->p4_10>=50){
                    $instructor_1 += $eval->p4_10;
                    $tam1++;
                }
                if($eval->p4_11>=50){
                    $instructor_1 += $eval->p4_11;
                    $tam1++;
                }

                //Si hay dos profesores acumulamos la evaluación del segundo
                if($eval->p5_1>=50){
                    $instructor_2 += $eval->p5_1;
                    $tam2++;
                }
                if($eval->p5_2>=50){
                    $instructor_2 += $eval->p5_2;
                    $tam2++;
                }
                if($eval->p5_3>=50){
                    $instructor_2 += $eval->p5_3;
                    $tam2++;
                }
                if($eval->p5_4>=50){
                    $instructor_2 += $eval->p5_4;
                    $tam2++;
                }
                if($eval->p5_5>=50){
                    $instructor_2 += $eval->p5_5;
                    $tam2++;
                }
                if($eval->p5_6>=50){
                    $instructor_2 += $eval->p5_6;
                    $tam2++;
                }
                if($eval->p5_7>=50){
                    $instructor_2 += $eval->p5_7;
                    $tam2++;
                }
                if($eval->p5_8>=50){
                    $instructor_2 += $eval->p5_8;
                    $tam2++;
                }
                if($eval->p5_9>=50){
                    $instructor_2 += $eval->p5_9;
                    $tam2++;
                }
                if($eval->p5_10>=50){
                    $instructor_2 += $eval->p5_10;
                    $tam2++;
                }
                if($eval->p5_11>=50){
                    $instructor_2 += $eval->p5_11;
                    $tam2++;
                }

                //Si hay tres profesores acumulamos la evaluación del tecero
                if($eval->p6_1>=50){
                    $instructor_3 += $eval->p6_1;
                    $tam3++;
                }
                if($eval->p6_2>=50){
                    $instructor_3 += $eval->p6_2;
                    $tam3++;
                }
                if($eval->p6_3>=50){
                    $instructor_3 += $eval->p6_3;
                    $tam3++;
                }
                if($eval->p6_4>=50){
                    $instructor_3 += $eval->p6_4;
                    $tam3++;
                }
                if($eval->p6_5>=50){
                    $instructor_3 += $eval->p6_5;
                    $tam3++;
                }
                if($eval->p6_6>=50){
                    $instructor_3 += $eval->p6_6;
                    $tam3++;
                }
                if($eval->p6_7>=50){
                    $instructor_3 += $eval->p6_7;
                    $tam3++;
                }
                if($eval->p6_8>=50){
                    $instructor_3 += $eval->p6_8;
                    $tam3++;
                }
                if($eval->p6_9>=50){
                    $instructor_3 += $eval->p6_9;
                    $tam3++;
                }
                if($eval->p6_10>=50){
                    $instructor_3 += $eval->p6_10;
                    $tam3++;
                }
                if($eval->p6_11>=50){
                    $instructor_3 += $eval->p6_11;
                    $tam3++;
                }

                if(intval($eval->p7) === 1){
                    $factor_recomendacion_curso++;
                    $tam_recomendacion++;
                }else if(intval($eval->p7) === 0 ){
                    $tam_recomendacion++;
                }

            }

            //Serie de pasos necesarios para obtener el promedio por curso
            $divisor = 1;
            if($tam2 == 0){
                $tam2 = 1;
            }else{
                $divisor = 2;
            }
            if($tam3 == 0){
                $tam3 = 1;
            }else{
                $divisor = 3;
            }

            if($tam_contenido != 0)
                $contenido_promedio += $contenido_curso/($tam_contenido);
            if($tam_coord != 0)
                $coordinacion_promedio += $coordinacion_curso/($tam_coord);
            if($tam1 != 0)
                $instructor_promedio += (($instructor_1/($tam1))+($instructor_2/($tam2))+($instructor_3/($tam3)))/$divisor;
            if($tam_curso != 0)
            $factor_recomendacion_promedio += ($factor_recomendacion_curso*100)/$tam_recomendacion;

        }


        //Serie de pasos necesarios para obtener el promedio de toda el área
        $factor_contenido_aritmetico = round($contenido_promedio / $tam_coordinacion,2);
        $factor_instructor_aritmetico = round($instructor_promedio / $tam_coordinacion,2);
        $factor_coordinacion_aritmetico = round($coordinacion_promedio / $tam_coordinacion,2);
        $factor_recomendacion_aritmetico = round($factor_recomendacion_promedio / $tam_coordinacion,2);

        $aritmetico = [$factor_contenido_aritmetico,$factor_instructor_aritmetico,$factor_coordinacion_aritmetico,$factor_recomendacion_aritmetico];
        return $aritmetico;

    }

    public function reporteGlobalArea($semestre, $periodo, $coordinacion_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
      $fecha = explode('-',$semestre);
      $coordinacion = Coordinacion::findOrFail($coordinacion_id);
      $cursos = Curso::join('catalogo_cursos', 'catalogo_cursos.id', '=', 'cursos.catalogo_id')
        ->where('cursos.semestre_anio', $fecha[0])
        ->where('cursos.semestre_pi', $fecha[1])
        ->where('cursos.semestre_si', $periodo)
        ->where('catalogo_cursos.coordinacion_id', $coordinacion->id)
        ->where('cursos.sgc',true)
        ->select('catalogo_cursos.*','cursos.*')
        ->get();
      if($cursos->isEmpty())
        return redirect()->route('cd.area', [$semestre, $periodo, $coordinacion_id])
          ->with('warning', 
          'El periodo seleccionado con anterioridad, no cuenta con cursos del SGC.');

      //Variables para enviar a la vista
      $nombre_cursos = array();
      $nombres_instructores = array();
      $horarios = array();
      $tematicas = array();
      
      $DP = 0;
      $DH = 0;
      $CO = 0;
      $DI = 0;
      $Otros = 0;

      $capacidad = 0;
      $inscritos = 0; 
      $acreditados = 0;
      $asistentes = 0;
      $contestaron = 0;
      $positivas = 0;
      $duracion = 0;


      $factor_ocupacion = 0;
      $factor_recomendacion = 0;
      $factor_acreditacion = 0;
      $factor_calidad = 0;

      $criterio_contenido_arim = 0;
      $criterio_coordinacion_arim = 0;
      $criterio_recomendacion_arim = 0;
      $criterio_instructores_arim = 0;

      $criterio_coordinacion_pon = 0;
      $criterio_contenido_pon = 0;
      $criterio_recomendacion_pon = 0;
      $criterio_instructores_pon = 0;

      $reactivos_contenido = 0;
      $reactivos_instructores = 0;
      $reactivos_coordinacion = 0;
      $reactivos_recomendacion = 0;
      $reactivos_autoevaluacion = 0;


      //Recorremos cada curso
      foreach($cursos as $curso){
        //Datos por curso
        $participantes = $curso->getParticipantes();
        $evals_curso = $curso->getEvalsCurso();
        $instructores = $curso->getProfesoresCurso();
        $curso->acreditados = 0;
        $curso->asistentes = 0;
        $curso->contestaron = 0;

        $curso->criterio_contenido = 0;
        $curso->criterio_coordinacion = 0;
        $curso->criterio_recomendacion = 0;
        $curso->criterio_instructores = 0;

        $curso->reactivos_contenido = 0;
        $curso->reactivos_coordinacion = 0;
        $curso->reactivos_instructores = 0;
        $curso->reactivos_recomendacion = 0;
        $curso->reactivos_autoevaluacion = 0;

        $curso->positivas = 0;
        $curso->negativas = 0;

        //Calculos de encuestas por instructor
        foreach($instructores as $instructor){
          $evals_instructor = $instructor->getEvaluaciones();
          $instructor->nombre = $instructor->getNombreProfesor();
          $instructor->min = 100;
          $instructor->max = 0;
          $instructor->prom = 0;
          $instructor->count_evals = 0;
          foreach($evals_instructor as $eval){
            
            //Para calcular max, min y promedios del instructor
            $eval->puntaje = 0;
            $eval->reactivos = 0;

            //Para factor de calidad
            $reactivo = $eval->getCons($eval->p1);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p1;
              $curso->criterio_instructores += $eval->p1;
              $eval->puntaje += $eval->p1;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p2);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p2;
              $curso->criterio_instructores += $eval->p2;
              $eval->puntaje += $eval->p2;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p3);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p3;
              $curso->criterio_instructores += $eval->p3;
              $eval->puntaje += $eval->p3;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p4);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p4;
              $curso->criterio_instructores += $eval->p4;
              $eval->puntaje += $eval->p4;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p5);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p5;
              $curso->criterio_instructores += $eval->p5;
              $eval->puntaje += $eval->p5;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p6);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p6;
              $curso->criterio_instructores += $eval->p6;
              $eval->puntaje += $eval->p6;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p7);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p7;
              $curso->criterio_instructores += $eval->p7;
              $eval->puntaje += $eval->p7;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p8);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p8;
              $curso->criterio_instructores += $eval->p8;
              $eval->puntaje += $eval->p8;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p9);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p9;
              $curso->criterio_instructores += $eval->p9;
              $eval->puntaje += $eval->p9;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p10);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p10;
              $curso->criterio_instructores += $eval->p10;
              $eval->puntaje += $eval->p10;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }

            $reactivo = $eval->getCons($eval->p11);
            if($reactivo !== NULL){
              $curso->reactivos_instructores++;
              $eval->reactivos++;
              $criterio_instructores_pon += $eval->p11;
              $curso->criterio_instructores += $eval->p11;
              $eval->puntaje += $eval->p11;
            }
            if($reactivo === 1){
              $curso->positivas++;
            }elseif($reactivo === 0){
              $curso->negativas++;
            }
            if($eval->reactivos != 0){
              $instructor->count_evals++;
              $eval->puntaje = round($eval->puntaje / $eval->reactivos, 2);
            }
            else
              $eval->puntaje = 0;
            $instructor->prom += $eval->puntaje; 
            if($eval->puntaje < $instructor->min)
              $instructor->min = $eval->puntaje;
            if($eval->puntaje > $instructor->max)
              $instructor->max = $eval->puntaje;
          }
          if($evals_instructor->count() === 0)
            return redirect()->back()->with('danger', 'No hay evaluaciones creadas para el instructor '.$instructor->getNombreProfesor().' en el curso '.$curso->nombre_curso);
          $instructor->prom = round($instructor->prom / $instructor->count_evals, 2);
        }

        //Calculos por participante del curso
        foreach($participantes as $participante){
          if($participante->acreditacion == 1)
            $curso->acreditados++;
          if($participante->asistencia == 1)
            $curso->asistentes++;
          if($participante->contesto_hoja_evaluacion == 1)
            $curso->contestaron++;
        }

        // //Calculos por evaluacion del curso
        //TODO Descomentar
        // if($curso->contestaron != $evals_curso->count())
        //   return redirect()->back()->with('danger',
        //   'El número de participantes con la casilla de hoja de evaluación '. 
        //   'marcada es diferente del número de evaluaciones creadas, por favor '.
        //   'verifique');
        foreach($evals_curso as $eval){

          //Para factor de recomendacion
          if($eval->p7 === 0)
            $curso->reactivos_recomendacion++;
          elseif($eval->p7 === 1){
            $curso->reactivos_recomendacion++;
            $curso->criterio_recomendacion++;
            $criterio_recomendacion_pon++;
          }

          //Para factor de calidad
          $reactivo = $eval->getCons($eval->p1_1);
          if($reactivo !== NULL){
            $criterio_contenido_pon += $eval->p1_1;
            $curso->criterio_contenido += $eval->p1_1;
            $curso->reactivos_contenido++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p1_2);
          if($reactivo !== NULL){
            $criterio_contenido_pon += $eval->p1_2;
            $curso->criterio_contenido += $eval->p1_2;
            $curso->reactivos_contenido++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p1_3);
          if($reactivo !== NULL){
            $criterio_contenido_pon += $eval->p1_3;
            $curso->criterio_contenido += $eval->p1_3;
            $curso->reactivos_contenido++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p1_4);
          if($reactivo !== NULL){
            $criterio_contenido_pon += $eval->p1_4;
            $curso->criterio_contenido += $eval->p1_4;
            $curso->reactivos_contenido++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p1_5);
          if($reactivo !== NULL){
            $criterio_contenido_pon += $eval->p1_5;
            $curso->criterio_contenido += $eval->p1_5;
            $curso->reactivos_contenido++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p2_1);
          if($reactivo !== NULL){
            $curso->reactivos_autoevaluacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p2_2);
          if($reactivo !== NULL){
            $curso->reactivos_autoevaluacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p2_3);
          if($reactivo !== NULL){
            $curso->reactivos_autoevaluacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p2_4);
          if($reactivo !== NULL){
            $curso->reactivos_autoevaluacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p3_1);
          if($reactivo !== NULL){
            $criterio_coordinacion_pon += $eval->p3_1;
            $curso->criterio_coordinacion += $eval->p3_1;
            $curso->reactivos_coordinacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p3_2);
          if($reactivo !== NULL){
            $criterio_coordinacion_pon += $eval->p3_2;
            $curso->criterio_coordinacion += $eval->p3_2;
            $curso->reactivos_coordinacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p3_3);
          if($reactivo !== NULL){
            $criterio_coordinacion_pon += $eval->p3_3;
            $curso->criterio_coordinacion += $eval->p3_3;
            $curso->reactivos_coordinacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }

          $reactivo = $eval->getCons($eval->p3_4);
          if($reactivo !== NULL){
            $criterio_coordinacion_pon += $eval->p3_4;
            $curso->criterio_coordinacion += $eval->p3_4;
            $curso->reactivos_coordinacion++;
          }
          if($reactivo === 1){
            $curso->positivas++;
          }elseif($reactivo === 0){
            $curso->negativas++;
          }
          if($eval->conocimiento != null){
            foreach($eval->conocimiento as $elem){
              if($elem == 1 ){
                $DP++;
              }else if($elem == 2){
                $DH++;
              }else if($elem == 3){
                $CO++;
              }else if($elem == 4){
                $DI++;
              }else if($elem == 5){
                $Otros++;
              }
              if($eval->tematica)
                array_push($tematicas, array(
                  "tematica"=>$eval->tematica, 
                  "curso"=>$curso->nombre_curso, 
                  "otros"=>$eval->otros
                ));
              else{
                $nombre_curso = DB::table('_evaluacion_final_curso as e')
                  ->select('cc.nombre_curso')
                  ->join('participante_curso as pc','e.participante_curso_id', '=' ,'pc.id')
                  ->join('cursos as c', 'pc.curso_id','=','c.id')
                  ->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
                  ->where('e.participante_curso_id','=',$eval->participante_curso_id)
                  ->get();
                $semestre_anio = DB::table('_evaluacion_final_curso as e')
                  ->select('c.semestre_anio')
                  ->join('participante_curso as pc','e.participante_curso_id', '=' ,'pc.id')
                  ->join('cursos as c', 'pc.curso_id','=','c.id')
                  ->where('e.participante_curso_id','=',$eval->participante_curso_id)
                  ->get();
                $semestre_pi = DB::table('_evaluacion_final_curso as e')
                  ->select('c.semestre_pi')
                  ->join('participante_curso as pc','e.participante_curso_id', '=' ,'pc.id')
                  ->join('cursos as c', 'pc.curso_id','=','c.id')
                  ->where('e.participante_curso_id','=',$eval->participante_curso_id)
                  ->get();
                $semestre_si = DB::table('_evaluacion_final_curso as e')
                  ->select('c.semestre_si')
                  ->join('participante_curso as pc','e.participante_curso_id', '=' ,'pc.id')
                  ->join('cursos as c', 'pc.curso_id','=','c.id')
                  ->where('e.participante_curso_id','=',$eval->participante_curso_id)
                  ->get();
                $semestre_anio = $semestre_anio[0]->semestre_anio;
                $semestre_pi = $semestre_pi[0]->semestre_pi;
                $semestre_si = $semestre_si[0]->semestre_si;
                $nombre_curso = $nombre_curso[0]->nombre_curso;
                $tematica = DB::table('_evaluacion_final_curso as e')
                  ->select('h.tematica')
                  ->join('participante_curso as pc','e.participante_curso_id', '=' ,'pc.id')
                  ->join('profesors as p','pc.profesor_id', '=', 'p.id')
                  ->join('cursos as c','pc.curso_id','=','c.id')
                  ->join('historico_tematicas as h','p.email', '=' ,'h.email_profesor')
                  ->where([['e.participante_curso_id','=',$eval->participante_curso_id],['h.nombre_curso','=',$nombre_curso],['c.semestre_anio','=',$semestre_anio],['c.semestre_pi','=',$semestre_pi],['c.semestre_si','=',$semestre_si]])
                  ->get();
                if($tematica != '[]'){
                  foreach($tematica as $tem){
                    $in_tematicas = false;
                    foreach($tematicas as $arreglo){
                      if(in_array($tem->tematica,$arreglo))
                        $in_tematicas = true;
                    }
                    if(!$in_tematicas)
                      array_push($tematicas, array(
                          "tematica"=>$tem->tematica, 
                          "curso"=>$curso->nombre_curso, 
                          "otros"=>$eval->otros
                      ));
                  }
                }
              }
            }
          }

          if($eval->horarios !== NULL || $eval->horarioi !== NULL){
            $horario = collect([$eval->horarios,$eval->horarioi]);
          }else{
            $horario = NULL;
          }
          array_push($horarios, $horario);
        }

        // CALCULOS POR CURSO
        // Para nombres de cursos en la vista
        array_push($nombre_cursos, $curso->nombre_curso);

        // Para factores
        if($curso->cupo_maximo != NULL && $curso->cupo_maximo != 0)
          $curso->factor_ocupacion = round(($curso->asistentes * 100) / $curso->cupo_maximo,2);
        if($curso->reactivos_recomendacion != 0)
          $curso->factor_recomendacion = round(($curso->criterio_recomendacion * 100) / $curso->reactivos_recomendacion,2);
        // if($curso->asistentes !=NULL && $curso->asistentes != 0)
        //   $curso->factor_acreditacion  = round(($curso->acreditados * 100) / $curso->asistentes,2);
        if($curso->reactivos_contenido != 0 || $curso->reactivos_instructores != 0 || $curso->reactivos_coordinacion != 0 || $curso->reactivos_autoevaluacion != 0)
          $curso->factor_calidad = round(($curso->positivas * 100) / (
                                        $curso->reactivos_contenido + 
                                        $curso->reactivos_instructores + 
                                        $curso->reactivos_autoevaluacion +
                                        $curso->reactivos_coordinacion ),2);
        
        $factor_ocupacion     += $curso->factor_ocupacion;
        $factor_recomendacion += $curso->criterio_recomendacion;
        // $factor_acreditacion  += $curso->factor_acreditacion;
        $factor_calidad       += $curso->factor_calidad;

        // Para criterios aritmeticos
        if($curso->reactivos_contenido != 0)
          $curso->criterio_contenido = round($curso->criterio_contenido / $curso->reactivos_contenido, 2);
        if($curso->reactivos_coordinacion != 0)
          $curso->criterio_coordinacion = round($curso->criterio_coordinacion / $curso->reactivos_coordinacion, 2);
        if($curso->reactivos_recomendacion != 0)
          $curso->criterio_recomendacion = round($curso->criterio_recomendacion * 100 / $curso->reactivos_recomendacion, 2);
        if($curso->reactivos_instructores != 0)
          $curso->criterio_instructores = round($curso->criterio_instructores / $curso->reactivos_instructores, 2);

        $criterio_contenido_arim += $curso->criterio_contenido;
        $criterio_coordinacion_arim += $curso->criterio_coordinacion;
        $criterio_recomendacion_arim += $curso->criterio_recomendacion;
        $criterio_instructores_arim += $curso->criterio_instructores;

        
        //Para criterios ponderados
        $reactivos_contenido += $curso->reactivos_contenido;
        $reactivos_coordinacion += $curso->reactivos_coordinacion;
        $reactivos_instructores += $curso->reactivos_instructores;
        $reactivos_autoevaluacion += $curso->reactivos_autoevaluacion;
        $reactivos_recomendacion += $curso->reactivos_recomendacion;
        

        // Para datos de la vista
        $acreditados += $curso->acreditados;
        $asistentes  += $curso->asistentes;
        $contestaron += $curso->contestaron;
        $capacidad   += $curso->cupo_maximo;
        $positivas   += $curso->positivas;
        $inscritos   += $participantes->count();
        $duracion += $curso->duracion_curso;

        
        //Juicio sumario de los instructores
        // if($curso->factor_calidad >= 80 && $curso->factor_acreditacion >= 80 && $curso->factor_recomendacion >= 80){
          foreach($instructores as $instructor){
            array_push($nombres_instructores, $instructor);
          }
        // }
      }
      $reactivos = $reactivos_contenido+
                   $reactivos_coordinacion+
                   $reactivos_instructores+
                   $reactivos_autoevaluacion;


      // Excepciones por división entre cero
      if($reactivos === 0)
        return redirect()->back()->with('danger', 'No hay reactivos de contenido, de coordinación, de instructores ni de autoevaluación para ninguna evaluacion de ningún curso de este periodo');
      if($reactivos_contenido === 0)
        return redirect()->back()->with('danger', 'No hay reactivos de contenido evaluados para ninguna evaluacion de ningún curso de este periodo');
      if($reactivos_coordinacion === 0)
        return redirect()->back()->with('danger', 'No hay reactivos de coordinacion evaluados para ninguna evaluacion de ningún curso de este periodo');
      if($reactivos_recomendacion === 0)
        return redirect()->back()->with('danger', 'No hay reactivos de recomendacion evaluados para ninguna evaluacion de ningún curso de este periodo');
      if($reactivos_instructores === 0)
        return redirect()->back()->with('danger', 'No hay reactivos de instructores evaluados para ninguna evaluacion de ningún curso de este periodo');
      if($capacidad === 0)
        return redirect()->back()->with('danger', 'Capacidad de todos los cursos igual a cero, verifique.');
      if($asistentes === 0)
        return redirect()->back()->with('danger', 'Cantidad de asistentes de todos los cursos igual a cero, verifique.');


      // Calculo final de factores
      $factor_ocupacion = round($asistentes*100 / $capacidad,2);
      $factor_recomendacion = round($factor_recomendacion*100 / $reactivos_recomendacion,2);
      $factor_acreditacion = round($acreditados*100/$asistentes,2);
      $factor_calidad = round($positivas*100 / $reactivos,2);

      // Calculo final de criterios ponderados
      $criterio_contenido_pon = round($criterio_contenido_pon / $reactivos_contenido, 2);
      $criterio_coordinacion_pon = round($criterio_coordinacion_pon / $reactivos_coordinacion, 2);
      $criterio_recomendacion_pon = round(($criterio_recomendacion_pon * 100) / $reactivos_recomendacion, 2);
      $criterio_instructores_pon = round($criterio_instructores_pon / $reactivos_instructores, 2);

      // Calculo final de criterios aritmeticos
      $criterio_contenido_arim = round($criterio_contenido_arim / $cursos->count(),2);
      $criterio_coordinacion_arim = round($criterio_coordinacion_arim / $cursos->count(),2);
      $criterio_recomendacion_arim = round($criterio_recomendacion_arim / $cursos->count(),2);
      $criterio_instructores_arim = round($criterio_instructores_arim / $cursos->count(),2);

      return view('pages.global')
      ->with('nombre_cursos',$nombre_cursos)
      ->with('periodo',$semestre.$periodo)
      ->with('acreditados',$acreditados)
      ->with('inscritos',$inscritos)
      ->with('contestaron' , $contestaron)
      ->with('asistentes' , $asistentes)
      ->with('capacidad' , $capacidad)
      ->with('duracion' , $duracion)
      ->with('horas_pc', $duracion*$asistentes)
      ->with('factor_ocupacion' , $factor_ocupacion)
      ->with('factor_recomendacion' , $factor_recomendacion)
      ->with('factor_acreditacion' , $factor_acreditacion)
      ->with('factor_calidad' , $factor_calidad)
      ->with('nombres_instructores' , $nombres_instructores)
      ->with('DP' , $DP)
      ->with('DH' , $DH)
      ->with('CO' , $CO)
      ->with('DI' , $DI)
      ->with('tematicas' , $tematicas)
      ->with('horarios' , $horarios)
      ->with('criterio_contenido_arim' , $criterio_contenido_arim)
      ->with('criterio_instructores_arim' , $criterio_instructores_arim)
      ->with('criterio_coordinacion_arim' , $criterio_coordinacion_arim)
      ->with('criterio_recomendacion_arim' , $criterio_recomendacion_arim)
      ->with('criterio_contenido_pon' , $criterio_contenido_pon)
      ->with('criterio_instructores_pon' , $criterio_instructores_pon)
      ->with('criterio_coordinacion_pon' , $criterio_coordinacion_pon)
      ->with('criterio_recomendacion_pon' , $criterio_recomendacion_pon);
    }

    public function reporteFinalCurso($curso_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
      //TODO:Meter esto a una funcion helper
      setlocale(LC_ALL,"es_MX");
      $date = getdate();
      $dia = '';
      $mes= '';
      switch($date["weekday"]){
        case 'Monday':
          $dia = 'Lunes';
          break;
        case 'Tuesday':
          $dia = 'Martes';
          break;
        case 'Wednesday':
          $dia = 'Miércoles';
          break;
        case 'Thursday':
          $dia = 'Jueves';
          break;
        case 'Friday':
          $dia = 'Viernes';
          break;
        case 'Saturday':
          $dia = 'Sábado';
          break;
        case 'Sunday':
          $dia = 'Domingo';
          break;
      }

      switch($date["mon"]){
        case 1:
          $mes = 'enero';
          break;
        case 2:
          $mes = 'febrero';
          break;
        case 3:
          $mes = 'marzo';
          break;
        case 4:
          $mes = 'abril';
          break;
        case 5:
          $mes = 'mayo';
          break;
        case 6:
          $mes = 'junio';
          break;
        case 7:
          $mes = 'julio';
          break;
        case 8:
          $mes = 'agosto';
          break;
        case 9:
          $mes = 'septiembre';
          break;
        case 10:
          $mes = 'octubre';
          break;
        case 11:
          $mes = 'noviembre';
          break;
        case 12:
          $mes = 'diciembre';
          break;
      }
      $curso = Curso::findOrFail($curso_id);
      $catalogoCurso = $curso->getCatalogoCurso();
      $participantes = $curso->getParticipantes();
      $evals =  $curso->getEvalsCurso();
      
      if($evals->isEmpty()){
        return redirect()->back()
          ->with('danger', 'Curso no cuenta con evaluación');
      }
		  
      //Obtenemos el factor de recomendación y de asistencia
      $contestaron = $evals->count();
      //TODO DESCOMENTAR
      // if($participantes->where('contesto_hoja_evaluacion','true')->count() != $contestaron)
      //   return redirect()->back()->with('danger','El número de participantes '.
      //   'que tienen el rubro de "Contestó hoja de evaluación" es diferente '.
      //   'del número de encuestas encontradas');
      $recomendaciones = 0;
      $factor = 0;
      $alumnos = 0;
      foreach($evals as $eval){
      //Si la pregunta 7 vale uno es curso es recomendado
        if($eval->p7 === 1){
          $recomendaciones = $recomendaciones + 1;
          $alumnos = $alumnos + 1;
        }else if($eval->p7 === 0){
          $alumnos = $alumnos + 1;
        }
      }

      //Obtenemos el factor de recomendacion
      if($alumnos == 0)
        $factor = round(($recomendaciones * 100) / 1,2);
      else
        $factor = round(($recomendaciones * 100) / $alumnos,2);

      //Obtenemos el factor de acreditación y la asistencia
		  $acreditado = 0;
		  $factor_acreditacion = 0;
		  $alumnos = 0;
		  $asistieron = 0;
		  foreach($participantes as $participante){
        $alumnos = $alumnos + 1;
        if($participante->acreditacion == 1)
          $acreditado = $acreditado + 1;
        if($participante->asistencia == 1)
          $asistieron++;
		  }
		  
      //Obtenemos el factor de acreditacion 
      if($asistieron == 0)
        $factor_acreditacion = round(($acreditado * 100) / 1,2);
      else
        $factor_acreditacion = round(($acreditado * 100) / $asistieron,2);

      //Obtenemos el factor de ocupacion
      $ocupacion = ($asistieron*100)/$curso->cupo_maximo;

      //Obtenemos la cantidad de integrantes de cada area
      $DP=0;
      $DH=0;
      $CO=0;
      $DI=0;
      $Otros=0;
      foreach($evals as $evaluacion){
          if($evaluacion->conocimiento === NULL)
            continue;
          foreach($evaluacion->conocimiento as $elem){
              if($elem == 1 ){
                //Aumentamos numero integrante Division Pedagogia
                $DP++;
              }else if($elem == 2 ){
                //Aumentamos numero integrantes division desarrollo humano
                $DH++;
              }else if($elem == 3 ){
                //Aumentamos numero integrante Division de computo
                $CO++;
              }else if($elem == 4 ){
              //Aumentamos numero integrante Division de disciplina
                $DI++;
              }else if($elem == 5 ){
              //Aumentamos numero integrante externo
                $Otros++;
              }
          }
      }   

      $preguntas = 0;
      $positivas = 0;
      $respuestasContenido = 0;
      $respuestasCoordinacion = 0;
      
      $alumnos = 0;
      $preguntas_contenido = 0;
      $preguntas_coordinacion = 0;

      //Arrays para sugerencias, tematicas, conocimiento y horarios
      $sugs = array();
      $tematicas = array();
      // $horarioi = array();
      $horarios = array();
      //Bucle necesario para obtener el numero de preguntas positivas, evaluaciones de cada uno de los instructores y los factores de calidad de contenido, de calidad de la coordinacion, y los factores de calidad de los instructores
      foreach($evals as $evaluacion){
        //Aumentamos el numero de alumnos que respondieron el cuestionario
        $alumnos++;
        if($evaluacion->sug)
          array_push($sugs, $evaluacion->sug);
        if($evaluacion->tematica)
          array_push($tematicas, $evaluacion->tematica);
        else{
          $tematica = DB::table('_evaluacion_final_curso as e')
            ->select('h.tematica')
            ->join('participante_curso as pc','e.participante_curso_id', '=' ,'pc.id')
            ->join('profesors as p','pc.profesor_id', '=', 'p.id')
            ->join('historico_tematicas as h','p.email', '=' ,'h.email_profesor')
            ->where([['e.participante_curso_id','=',$evaluacion->participante_curso_id],['h.nombre_curso','=',$catalogoCurso->nombre_curso]])
            ->get();
          if($tematica != '[]'){
            array_push($tematicas, $tematica[0]->tematica);
          }
        }
        if($evaluacion->horarioi || $evaluacion->horarios)
          array_push($horarios, array('inter'=>$evaluacion->horarioi, 'semes'=>$evaluacion->horarios));
        //Desde 1_1 a 1_5 obtenemos el factor de calidad del contenido ($respuestasContenido/$alumnos*5) valor >= 60
        if($evaluacion->p1_1 >= 50){
          $preguntas++;
          $respuestasContenido += $evaluacion->p1_1;
          $preguntas_contenido++;
          if($evaluacion->p1_1 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p1_2 >= 50){
          $preguntas++;
          $respuestasContenido+= $evaluacion->p1_2;
          $preguntas_contenido++;
          if($evaluacion->p1_2 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p1_3 >= 50){
          $preguntas++;
          $respuestasContenido+= $evaluacion->p1_3;
          $preguntas_contenido++;
          if($evaluacion->p1_3 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p1_4 >= 50){
          $preguntas++;
          $respuestasContenido+= $evaluacion->p1_4;
          $preguntas_contenido++;
          if($evaluacion->p1_4 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p1_5 >= 50){
          $preguntas++;
          $respuestasContenido+= $evaluacion->p1_5;
          $preguntas_contenido++;
          if($evaluacion->p1_5 >= 80){
            $positivas++;
          }
        }

        if($evaluacion->p2_1 >= 50){
          $preguntas++;
          if($evaluacion->p2_1 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p2_2 >= 50){
          $preguntas++;
          if($evaluacion->p2_2 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p2_3 >= 50){
          $preguntas++;
          if($evaluacion->p2_3 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p2_4 >= 50){
          $preguntas++;
          if($evaluacion->p2_4 >= 80){
            $positivas++;
          }
        }

        //Desde 1_1 a 1_5 obtenemos el factor de calidad de la coordinacion ($respuestasCoordinacion/$alumnos*4)
        if($evaluacion->p3_1 >= 50){
          $preguntas++;
          $respuestasCoordinacion += $evaluacion->p3_1;
          $preguntas_coordinacion++;
          if($evaluacion->p3_1 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p3_2 >= 50){
          $preguntas++;
          $respuestasCoordinacion += $evaluacion->p3_2;
          $preguntas_coordinacion++;
          if($evaluacion->p3_2 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p3_3 >= 50){
          $preguntas++;
          $respuestasCoordinacion += $evaluacion->p3_3;
          $preguntas_coordinacion++;
          if($evaluacion->p3_3 >= 80){
            $positivas++;
          }
        }
        if($evaluacion->p3_4 >= 50){
          $preguntas++;
          $respuestasCoordinacion += $evaluacion->p3_4;
          $preguntas_coordinacion++;
          if($evaluacion->p3_4 >= 80){
            $positivas++;
          }
        }
      }
      //Queremos obtener todas las evaluaciones para luego comparar promedio, 
      // minimo y maximo del instructor
      $instructores = $curso->getProfesoresCurso();
      $ct_instructores = 0;
      foreach($instructores as $instructor){
        $evalInsts = $instructor->getEvaluaciones();
        ${'respuestasInstructores'.$instructor->id} = 0;
        ${'alumnos_eval_instructor'.$instructor->id} = 0;
        ${'respuesta_individual'.$instructor->id} = 0;
        ${'factor_instructor'.$instructor->id} = 0;
        ${'promedios'.$instructor->id} = array();
        foreach($evalInsts as $evalInst){
          if($evalInst->p1 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p1;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p1;
            if($evalInst->p1 >= 80)
              $positivas++;
          } 
          if($evalInst->p2 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p2;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p2;
            if($evalInst->p2 >= 80)
              $positivas++;
          }
          if($evalInst->p3 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p3;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p3;
            if($evalInst->p3 >= 80)
              $positivas++;
          }
          if($evalInst->p4 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p4;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p4;
            if($evalInst->p4 >= 80)
              $positivas++;
          }
          if($evalInst->p5 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p5;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p5;
            if($evalInst->p5 >= 80)
              $positivas++;
          }
          if($evalInst->p6 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p6;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p6;
            if($evalInst->p6 >= 80)
              $positivas++;
          }
          if($evalInst->p7 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p7;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p7;
            if($evalInst->p7 >= 80)
              $positivas++;
          }
          if($evalInst->p8 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p8;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p8;
            if($evalInst->p8 >= 80)
              $positivas++;
          }
          if($evalInst->p9 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p9;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p9;
            if($evalInst->p9 >= 80)
              $positivas++;
          }
          if($evalInst->p10 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p10;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p10;
            if($evalInst->p10 >= 80)
              $positivas++;
          }
          if($evalInst->p11 >= 50){
            ${'alumnos_eval_instructor'.$instructor->id}++;
            $preguntas++;
            ${'respuestasInstructores'.$instructor->id}+= $evalInst->p11;
            ${'respuesta_individual'.$instructor->id}+= $evalInst->p11;
            array_push(${'promedios'.$instructor->id}, round(${'respuesta_individual'.$instructor->id}/11,2));
            ${'respuesta_individual'.$instructor->id} = 0;
            if($evalInst->p11 >= 80)
              $positivas++;
          }
        }
        //Obtenemos la evaluacion minima y maxima del primer instructor
        ${'minimo'.$instructor->id} = 0;
        ${'maximo'.$instructor->id} = 0;

        foreach(${'promedios'.$instructor->id} as $promedio){
          if(${'minimo'.$instructor->id} == 0){
            ${'minimo'.$instructor->id} = $promedio;
          }
          if($promedio < ${'minimo'.$instructor->id}){
            ${'minimo'.$instructor->id} = $promedio;
          }
          if($promedio > ${'maximo'.$instructor->id}){
            ${'maximo'.$instructor->id} = $promedio;
          }
        }
		    //Si hay un instructor obtenemos su factor
		    if(${'alumnos_eval_instructor'.$instructor->id} != 0)
			    ${'factor_instructor'.$instructor->id} = round(${'respuestasInstructores'.$instructor->id} / (${'alumnos_eval_instructor'.$instructor->id}),2);
        $instructor->factor = ${'factor_instructor'.$instructor->id};
        $instructor->minimo = ${'minimo'.$instructor->id};
        $instructor->maximo = ${'maximo'.$instructor->id};
        $ct_instructores = $ct_instructores + $instructor->factor;
      }

      $ct_instructores = $ct_instructores/$instructores->count();
      $envioPDF = 'pages.validacion';
      //En caso de no haber alumnos ni preguntas (se pide el resumen de un curso no evaluado anteriormente) pasamos su valor a 1 para evitar division by zero exception
      if($alumnos == 0)
        $alumnos = 1;      
      if($preguntas == 0)
        $preguntas = 1;
      if($preguntas_contenido == 0)
        $preguntas_contenido = 1;
      if($preguntas_coordinacion == 0)
        $preguntas_coordinacion = 1;
      //Obtenemos los factores de respuestas positivas, contenido y coordinacion
      $factor_respuestas_positivas = round($positivas*100 / $preguntas, 2);
      $factor_contenido = round($respuestasContenido / ($preguntas_contenido),2);
      $factor_coordinacion = round($respuestasCoordinacion / ($preguntas_coordinacion),2);
      $numero_horas = $catalogoCurso->duracion_curso;
      $nombre = $catalogoCurso->getTipoCadena().'_'
        .$catalogoCurso->nombre_curso.'_'.$curso->semestre_anio.'_'
        .$curso->semestre_pi.'_'
        .$curso->semestre_si.
        '.pdf';
      $inscritos = 0;
      foreach($participantes as $participante){
        if(!$participante->cancelacion){
          $inscritos++;
        }
      }
      $pdf = PDF::loadView($envioPDF,array(
        'nombre_curso' => $catalogoCurso->nombre_curso,
        'periodo'=> $curso->getPeriodo(),
        'nombre_instructores' => $curso->getInstructores(),
        'instructores' => $instructores,
        'fecha_imparticion'=> $curso->getFecha(),
        'cupo_maximo'=>$curso->cupo_maximo,
        'hora_inicio'=> $curso->hora_inicio,
        'hora_fin'=> $curso->hora_fin,
        'duracion'=> $catalogoCurso->duracion_curso,
        'sede' => $curso->getSede()->sede,
        'inscritos' => $inscritos,
        'asistieron'=>$asistieron,
        'acreditaron'=>$acreditado,
        'contestaron'=>$contestaron,
        //factor ocupacion
        'ocupacion'=>$ocupacion,
        //factor recomendacion
        'factor'=>$factor,
        'factor_acreditacion'=>$factor_acreditacion,
        //factor de calidad
        'positivas'=>$factor_respuestas_positivas,
        'sugerencias' => collect($sugs),
        'tematicas'=> collect($tematicas),
        // 'horarioi' => collect($horarioi),
        'horarios' => $horarios,
        //Criterio de aceptación de contenido
        'contenido'=>$factor_contenido,
        //Criterio de aceptacion de instructor
        'ct_instructores' =>$ct_instructores,
        //Criterio de aceptacion de coordinacion
        'factor_coordinacion'=>$factor_coordinacion,
        'DP'=>$DP,
        'DH'=>$DH,
        'CO'=>$CO,
        'DI'=>$DI,
        'dia'=>$dia,
        'mes' =>$mes,
        'date' =>$date,
        'Otros'=>$Otros,
      ));	
      return $pdf->download($nombre);
    }

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
        
    //     $participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
    //     return $this->saveFinal_Seminario($request,$profesor_id,$curso_id, $catalogoCurso_id);
    // }

    public function reporteFinalInstructor($curso_id){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
      $curso = Curso::findOrFail($curso_id);
      $catalogoCurso = $curso->getCatalogoCurso();
      $evalsCurso = $curso->getEvalsCurso();
      $p9s = array(); //mejor
      $sugs = array(); //sug
      $instructores = $curso->getProfesoresCurso();
      
      //TODO:Arreglar rutas en cd.area para redirigir a cd.area y no back por buscador
      if($evalsCurso->isEmpty())
        return redirect()->back()->with('danger', 'El curso no cuenta con evaluaciones');

      foreach($evalsCurso as $eval){
        if($eval->sug)
          array_push($sugs, $eval->sug);
        if($eval->p9)
          array_push($p9s, $eval->p9);
      }
      
      //Iteramos todas las evaluaciones para ir sumando los valores de las evaluaciones
      foreach($instructores as $instructor){
        $evals = $instructor->getEvaluaciones();
        if($evals->isEmpty())
          continue;
        $t_evals = $evals->count();
        foreach($evals as $eval){
          if($eval->p1)
            $instructor->experiencia += $eval->p1;
          if($eval->p2)
            $instructor->planeacion += $eval->p2;
          if($eval->p3)
            $instructor->puntualidad += $eval->p3;
          if($eval->p4)
            $instructor->materiales += $eval->p4;
          if($eval->p5)
            $instructor->dudas += $eval->p5;
          if($eval->p6)
            $instructor->control += $eval->p6;
          if($eval->p7)
            $instructor->interes += $eval->p7;
          if($eval->p8)
            $instructor->actitud += $eval->p8;
        }
        //Obtenemos los promedios de cada profesor
        $instructor->experiencia = round($instructor->experiencia/$t_evals,2);
        $instructor->planeacion = round($instructor->planeacion/$t_evals,2);
        $instructor->puntualidad = round($instructor->puntualidad/$t_evals,2);
        $instructor->materiales = round($instructor->materiales/$t_evals,2);
        $instructor->dudas = round($instructor->dudas/$t_evals,2);
        $instructor->control = round($instructor->control/$t_evals,2);
        $instructor->interes = round($instructor->interes/$t_evals,2);
        $instructor->actitud = round($instructor->actitud/$t_evals,2);
        $instructor->nombre = $instructor->getNombreProfesorConGrado();
      }
      //TODO:Meter esto a una funcion helper
      setlocale(LC_ALL,"es_MX");
      $date = getdate();
      $dia = '';
      $mes= '';
      switch($date["weekday"]){
        case 'Monday':
          $dia = 'Lunes';
          break;
        case 'Tuesday':
          $dia = 'Martes';
          break;
        case 'Wednesday':
          $dia = 'Miércoles';
          break;
        case 'Thursday':
          $dia = 'Jueves';
          break;
        case 'Friday':
          $dia = 'Viernes';
          break;
        case 'Saturday':
          $dia = 'Sábado';
          break;
        case 'Sunday':
          $dia = 'Domingo';
          break;
      }

      switch($date["mon"]){
        case 1:
          $mes = 'enero';
          break;
        case 2:
          $mes = 'febrero';
          break;
        case 3:
          $mes = 'marzo';
          break;
        case 4:
          $mes = 'abril';
          break;
        case 5:
          $mes = 'mayo';
          break;
        case 6:
          $mes = 'junio';
          break;
        case 7:
          $mes = 'julio';
          break;
        case 8:
          $mes = 'agosto';
          break;
        case 9:
          $mes = 'septiembre';
          break;
        case 10:
          $mes = 'octubre';
          break;
        case 11:
          $mes = 'noviembre';
          break;
        case 12:
          $mes = 'diciembre';
          break;
      }
      //Obtenemos el pdf
      $lugar = 'pages.reporte_final_instructores';
      $nombre = 'reporte_instructores_'.$catalogoCurso->nombre_curso.'.pdf';
      $pdf = PDF::loadView($lugar,array(
        'instructores' => $instructores,
        'total_evaluaciones' => $t_evals,
        'mejor'=>collect($p9s),
        'sugerencias'=>collect($sugs),
        'nombre_curso'=>$catalogoCurso->nombre_curso,
        'periodo' =>$curso->getPeriodo(),
        'catalogo'=>$catalogoCurso,
        'curso'=>$curso,
        'date'=>$date,
        'dia'=>$dia,
        'mes'=>$mes));	
      return $pdf->download($nombre);
    }

    public function asistentesGlobal(String $semestreEnv){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $fecha=$semestreEnv;
        $semestre=explode('-',$fecha);

        $cursos = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','cc.id','=','c.catalogo_id')
            ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
            ->select('c.id','cc.nombre_curso','co.abreviatura','c.semestre_si')
            ->where([['c.semestre_anio',$semestre[0]],['c.semestre_pi',$semestre[1]]])
            ->orderBy('c.semestre_si', 'desc')
            ->get();

        if(sizeof($cursos) == 0){
            return redirect()->back()
              ->with('danger', 'No hay cursos dados de alta en el periodo '.$semestreEnv);
        }
        
        $asistentes = array();
        foreach($cursos as $curso){
            $unam = 0;
            $externos = 0;
            $profesors = DB::table('participante_curso')
            ->join('profesors as p','p.id','=','participante_curso.profesor_id')
            ->select('p.unam','p.procedencia','participante_curso.asistencia')
            ->where([['participante_curso.curso_id',$curso->id]])
            ->get();
            foreach($profesors as $profesor){
                if($profesor->unam == 1){
                    $unam++;
                }else if($profesor->asistencia){
                    $externos++;
                }
            }
            $total = $unam+$externos;
            array_push($asistentes, [$curso, $unam, $externos, $total]);
        }

        $pdf = PDF::loadView('pages.participantes',array('semestre'=>$semestreEnv,'cursos'=>$asistentes));	

        $download='participantes_'.$semestre[0].'-'.$semestre[1].'.pdf';
        //Retornamos la descarga del pdf
        return $pdf->download($download);
    }

    public function asistentesArea(String $semestreEnv, String $division){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $fecha=$semestreEnv;
        $semestre=explode('-',$fecha);

        $coordinacion = DB::table('coordinacions')
            ->select('abreviatura')
            ->where([['id',$division]])
            ->get();

        $cursos = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','cc.id','=','c.catalogo_id')
            ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
            ->select('c.id','cc.nombre_curso','co.abreviatura','c.semestre_si')
            ->where([['c.semestre_anio',$semestre[0]],['c.semestre_pi',$semestre[1]],['co.id',$division]])
            ->orderBy('c.semestre_si', 'desc')
            ->get();
        
        $asistentes = array();
        foreach($cursos as $curso){
            $unam = 0;
            $externos = 0;
            $profesors = DB::table('participante_curso')
            ->join('profesors as p','p.id','=','participante_curso.profesor_id')
            ->select('p.unam','p.procedencia', 'participante_curso.asistencia')
            ->where([['participante_curso.curso_id',$curso->id]])
            ->get();
            foreach($profesors as $profesor){
                if($profesor->unam == 1){
                    $unam++;
                }else if($profesor->asistencia){
                    $externos++;
                }
            }
            $total = $unam+$externos;
            array_push($asistentes, [$curso, $unam, $externos, $total]);
        }
        
        $pdf = PDF::loadView('pages.participantes',array('semestre'=>$semestreEnv,'cursos'=>$asistentes));	

        $download='participantes_'.$coordinacion[0]->abreviatura.'-'.$semestre[0].'-'.$semestre[1].'.pdf';
        //Retornamos la descarga del pdf
        return $pdf->download($download);
    }

    public function criterioAceptacion(String $semestreEnv){
      if (Auth::guest()) {
        return redirect()->route('coordinador.login');
      }
        $fecha=$semestreEnv;
        $semestre=explode('-',$fecha);

        $cursos = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','cc.id','=','c.catalogo_id')
            ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
            ->select('c.id','cc.nombre_curso','co.abreviatura','c.semestre_si','cc.tipo')
            ->where([['c.semestre_anio',$semestre[0]],['c.semestre_pi',$semestre[1]]])
            ->orderBy('semestre_si', 'desc')
            ->get();

        $criterios_s=array();
        $criterios_i=array();

        foreach($cursos as $curso){
            $criterio = 0;
            $criterio=DB::table('_evaluacion_final_curso as e')
                ->join('participante_curso as p','p.id','=','e.participante_curso_id')
                ->join('cursos as c','p.curso_id','=','c.id')
                ->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
                ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
                ->select('e.p7','co.abreviatura')
                ->where('c.id',$curso->id)
                ->get();

            if($curso->semestre_si == 's' && $criterio != null){
                array_push($criterios_s, $criterio);
            }else if ($curso->semestre_si == 'i' && $criterio != null){
                array_push($criterios_i, $criterio);
            }
        }

        $aux1=array();
        $tam1=array();
        foreach($criterios_s as $criterios){
            foreach($criterios as $criterio){
                if(!array_key_exists($criterio->abreviatura,$aux1)){
                    $aux1[$criterio->abreviatura]=$criterio->p7;
                    $tam1[$criterio->abreviatura] = 1;
                }else{
                    $aux1[$criterio->abreviatura]+=$criterio->p7;
                    $tam1[$criterio->abreviatura] += 1;
                }
            }
        }

        $aux2=array();
        $tam2=array();
        foreach($criterios_i as $criterios){
            foreach($criterios as $criterio){
                if(!array_key_exists($criterio->abreviatura,$aux2)){
                    $aux2[$criterio->abreviatura]=$criterio->p7;
                    $tam2[$criterio->abreviatura] = 1;
                }else{
                    $aux2[$criterio->abreviatura]+=$criterio->p7;
                    $tam2[$criterio->abreviatura] += 1;
                }
            }
        }

        $aux1_empty = false;
        $promedio1 = 0;
        foreach ($aux1 as $key => $value) {
            $aux1[$key] = round(($aux1[$key]/$tam1[$key])*100,2);
            $promedio1 += $aux1[$key];
        }
        if(sizeof($aux1)==0){
            $aux1_empty = true;
        }else{
            $promedio1 = round($promedio1/sizeof($aux1),2);
            $aux1['Promedio:'] = $promedio1;
        }

        $aux2_empty = false;
        $promedio2 = 0;
        foreach ($aux2 as $key => $value) {
            $aux2[$key] = round(($aux2[$key]/$tam2[$key])*100,2);
            $promedio2 += $aux2[$key];
        }
        if(sizeof($aux2) == 0){
            $aux2_empty = true;
        }else{
            $promedio2 = round($promedio2/sizeof($aux2),2);
            $aux2['Promedio:'] = $promedio2;
        }

        if($aux1_empty && $aux2_empty){
            return redirect()->back()
              ->with('warning', 'El periodo '.$semestreEnv.' no posee ninguna evaluación asociada a algún curso');
        }

        if($aux1_empty)
          $final_prom = $aux2['Promedio:'];
        elseif($aux2_empty)
          $final_prom = $aux1['Promedio:'];
        else
          $final_prom = ($aux2['Promedio:']+$aux1['Promedio:'])/2;
        $pdf = PDF::loadView('pages.criterio_aceptacion',array('semestre'=>$semestreEnv,'criterio_s'=>$aux1,'criterio_i'=>$aux2,'criterio_s_empty'=>$aux1_empty,'criterio_i_empty'=>$aux2_empty, 'final_prom'=>$final_prom));	

        $download='criterio_aceptacion'.$semestre[0].'-'.$semestre[1].'.pdf';
        //Retornamos la descarga del pdf
        return $pdf->download($download);
    }

}   