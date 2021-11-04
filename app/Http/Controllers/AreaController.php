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
        $coordinacion = Auth::user();
        
        $cursos = $coordinacion->getCursos();

        Session::put('sesion','area');
        Session::put('url','area');

        if(Session::has('message')){
          Session::flash('message','Sucedió un error al contestar el formulario. Favor de llenar todas las preguntas o revisar que el usuario en cuestión no lo haya contestado');
          Session::flash('alert-class', 'alert-danger');
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
      $coordinacion = Auth::user();
      if($request->type === 'nombre')
        $cursos = Curso::join('catalogo_cursos','catalogo_cursos.id','=','cursos.catalogo_id')
        ->whereRaw("lower(unaccent(nombre_curso)) ILIKE lower(unaccent('%".$request->pattern."%'))")
        ->where('catalogo_cursos.coordinacion_id',$coordinacion->id)
        ->get();
      elseif($request->type === 'instructor'){
        $profesores = Profesor::select('id')->whereRaw("lower(unaccent(nombres)) ILIKE lower(unaccent('%".$request->pattern."%'))")
                  ->orWhereRaw("lower(unaccent(apellido_paterno)) ILIKE lower(unaccent('%".$request->pattern."%'))")
                  ->orWhereRaw("lower(unaccent(apellido_materno)) ILIKE lower(unaccent('%".$request->pattern."%'))")
                  ->orderByRaw("lower(unaccent(apellido_paterno)),lower(unaccent(apellido_materno)),lower(unaccent(nombres))")
                  ->get();
        $curso_prof = ProfesoresCurso::select('curso_id')->whereIn('profesor_id', $profesores)->get();
        $cursos = Curso::join('catalogo_cursos','catalogo_cursos.id', '=','cursos.catalogo_id')
                  ->where('catalogo_cursos.coordinacion_id',$coordinacion->id)
                  ->whereIn('cursos.id',$curso_prof)->get();
      }
      return view('pages.homeArea')
           ->with('cursos',$cursos)
           ->with('coordinacion',$coordinacion);
    }
    
    public function buscarCursoPeriodo(Request $request, $coordinacion_id){
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
      $participantes = DB::table('participante_curso')
          ->where([['curso_id',$curso_id]])
          ->get();
      $curso = Curso::findOrFail($curso_id);
      $users = array();
      if(sizeof($participantes) == 0){
        Session::flash('message','Por el momento no hay alumnos inscritos en el curso');
        Session::flash('alert-class', 'alert-danger'); 

        return redirect()->back()->withInput($request->input());
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
        $profesores = array();

            $words=explode(" ", $request->pattern);
            foreach($words as $word){
                $profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(unaccent(lower(nombres)) LIKE unaccent(lower('%".$word."%'))) OR (unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".$word."%'))) OR (unaccent(lower(apellido_materno)) LIKE unaccent(lower('%".$word."%')))")->get();
                if($profesor->isNotEmpty())
                  array_push($profesores, $profesor);
            }
            $curso_prof = array();
            $aux = array();

            foreach($profesores as $profesor_aux){
                foreach($profesor_aux as $profesor){
                    $prof = DB::table('participante_curso')
                        ->where([['profesor_id', $profesor->id],['curso_id',$curso_id]])
                        ->get();
                    if(sizeof($prof) > 0)
                        array_push($curso_prof, $prof);
                }
            }

            $datos = array();

            foreach($curso_prof as $prof_aux){
                foreach($prof_aux as $prof){
                    $dato = DB::table('participante_curso as pc')    
                        ->join('profesors as p', 'p.id', '=', 'pc.profesor_id')
                        ->join('cursos as c', 'c.id', '=', 'pc.curso_id')
                        ->join('catalogo_cursos as cc','cc.id', '=', 'c.catalogo_id')
                        ->select('cc.nombre_curso', 'c.id','p.id', 'p.nombres','p.apellido_paterno','p.apellido_materno')
                        ->where('pc.id','=',$prof->id)
                        ->get();
                    array_push($datos, $dato[0]);
                }
            }
            return view('pages.eval')
                ->with('datos',$datos)
                ->with('id',$curso_id);
    }

    public function evaluacion(Request $request, int $id){

        $datos = DB::table('cursos')
            ->join('participante_curso','cursos.id','=','participante_curso.curso_id')
            ->join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
            ->join('profesors','participante_curso.profesor_id','=','profesors.id')
            ->select('catalogo_cursos.nombre_curso','profesors.id','profesors.nombres','profesors.apellido_paterno','profesors.apellido_materno')
            ->where([['cursos.id',$id]])
            ->get();

		$catalogo_curso = DB::table('cursos as c')
            ->join('catalogo_cursos as cc','cc.id','=','c.catalogo_id')
            ->select('cc.nombre_curso')
            ->where('c.id',$id)
            ->get();
        
        if(sizeof($datos) == 0){
			Session::forget('message');
            Session::flash('message','No es posible realizar alguna evaluación, el curso '.$catalogo_curso[0]->nombre_curso.' no cuenta con participantes inscritos');
			Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back()->withInput($request->input());
        }

        return view('pages.eval')
            ->with('datos',$datos)
            ->with('id',$id);
    }

    public function evaluacionVista(Request $request, $curso_id, $profesor_id){
      $profesor = Profesor::findOrFail($profesor_id);
      $curso = Curso::findOrFail($curso_id);
      $catalogoCurso = CatalogoCurso::findOrFail($curso->catalogo_id);
      $participante_curso = ParticipantesCurso::where([
                                                  ['profesor_id',$profesor_id],
                                                  ['curso_id',$curso_id]
                                                ])->get()->first();
		if($catalogoCurso->tipo === "S"){
			$evaluacion_final_curso = EvaluacionFinalSeminario::where('participante_curso_id',$participante_curso->id)->get();
		}
		else{
			$evaluacion_final_curso = EvaluacionFinalCurso::where('participante_curso_id',$participante_curso->id)->get();
		}
    if($evaluacion_final_curso->isNotEmpty()){
      Session::flash('message','Usuario '.$profesor->apellido_paterno.' '.$profesor->apellido_materno.' '.$profesor->nombres.' ya respondió la evaluación');
      Session::flash('alert-class', 'alert-danger'); 
      return redirect()->back();
    }else if($catalogoCurso->tipo === "S"){
      return view("pages.final_seminario")
      ->with("profesor",$profesor)
      ->with("curso",$curso)
      ->with('catalogoCurso',$catalogoCurso);
    }else{
      return view("pages.final_curso")
        ->with("profesor",$profesor)
        ->with("curso",$curso)
        ->with('catalogoCurso',$catalogoCurso);
		}
	}

    public function saveFinal_Curso(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
        $participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
		return $participante;
        $evaluacion_id = DB::table('_evaluacion_final_curso')
            ->select('id')
            ->where([['participante_curso_id',$participante[0]->id],['curso_id',$curso_id]])
            ->get();

        if(sizeof($participante) > 0){
            $evaluacion_id = DB::table('_evaluacion_final_curso')
                ->select('id')
                ->where([['participante_curso_id',$participante[0]->id],['curso_id',$curso_id]])
                ->get();
            if(sizeof($evaluacion_id) > 0){
                $eval_fcurso = EvaluacionFinalSeminario::find($evaluacion_id[0]->id);
                $eval_fcurso->delete();
            }
        }

        $eval_fcurso = new EvaluacionFinalCurso;
		try{
			$eval_fcurso->participante_curso_id=$participante[0]->id;
			//Obtenemos la fecha actual para usarla en consultas posteriores	
			$date = date("Y-m-j");  
		  
			//1. DESARROLLO DEL CURSO
			$eval_fcurso->p1_1 = $request->p1_1;
			$eval_fcurso->p1_2 = $request->p1_2;
			$eval_fcurso->p1_3 = $request->p1_3;
			$eval_fcurso->p1_4 = $request->p1_4;
			$eval_fcurso->p1_5 = $request->p1_5;
          
			$promedio_p1 = [
				$eval_fcurso->p1_1,
				$eval_fcurso->p1_2,
				$eval_fcurso->p1_3,
				$eval_fcurso->p1_4,
				$eval_fcurso->p1_5
			];
          
			//2. AUTOEVALUACION
			$eval_fcurso->p2_1 = $request->p2_1;
			$eval_fcurso->p2_2 = $request->p2_2;
			$eval_fcurso->p2_3 = $request->p2_3;
			$eval_fcurso->p2_4 = $request->p2_4;
			$promedio_p2 =[
				$eval_fcurso->p2_1,
				$eval_fcurso->p2_2,
				$eval_fcurso->p2_3,
				$eval_fcurso->p2_4 
			];
			
			//3. COORDINACION DEL CURSO
			$eval_fcurso->p3_1 = $request->p3_1;
			$eval_fcurso->p3_2 = $request->p3_2;
			$eval_fcurso->p3_3 = $request->p3_3;
			$eval_fcurso->p3_4 = $request->p3_4;
			$promedio_p3=[
				$eval_fcurso->p3_1,
				$eval_fcurso->p3_2,
				$eval_fcurso->p3_3,
				$eval_fcurso->p3_4
			];			
			
			//4. INSTRUCTOR UNO
			$eval_fcurso->p4_1 = $request->p4_1;
			$eval_fcurso->p4_2 = $request->p4_2;
			$eval_fcurso->p4_3 = $request->p4_3;
			$eval_fcurso->p4_4 = $request->p4_4;
			$eval_fcurso->p4_5 = $request->p4_5;
			$eval_fcurso->p4_6 = $request->p4_6;
			$eval_fcurso->p4_7 = $request->p4_7;
			$eval_fcurso->p4_8 = $request->p4_8;
			$eval_fcurso->p4_9 = $request->p4_9;
			$eval_fcurso->p4_10 = $request->p4_10;
			$eval_fcurso->p4_11 = $request->p4_11;
			$promedio_p4=[
				$eval_fcurso->p4_1,
				$eval_fcurso->p4_2,
				$eval_fcurso->p4_3,
				$eval_fcurso->p4_4,
				$eval_fcurso->p4_5,
				$eval_fcurso->p4_6,
				$eval_fcurso->p4_7,
				$eval_fcurso->p4_8,
				$eval_fcurso->p4_9,
				$eval_fcurso->p4_10,
				$eval_fcurso->p4_11
			];
		
			//5. INSTRUCTOR DOS
			$eval_fcurso->p5_1 = $request->p5_1;
			$eval_fcurso->p5_2 = $request->p5_2;
			$eval_fcurso->p5_3 = $request->p5_3;
			$eval_fcurso->p5_4 = $request->p5_4;
			$eval_fcurso->p5_5 = $request->p5_5;
			$eval_fcurso->p5_6 = $request->p5_6;
			$eval_fcurso->p5_7 = $request->p5_7;
			$eval_fcurso->p5_8 = $request->p5_8;
			$eval_fcurso->p5_9 = $request->p5_9;
			$eval_fcurso->p5_10 = $request->p5_10;
			$eval_fcurso->p5_11 = $request->p5_11;
			$promedio_p5=[
				$eval_fcurso->p5_1,
				$eval_fcurso->p5_2,
				$eval_fcurso->p5_3,
				$eval_fcurso->p5_4,
				$eval_fcurso->p5_5,
				$eval_fcurso->p5_6,
				$eval_fcurso->p5_7,
				$eval_fcurso->p5_8,
				$eval_fcurso->p5_9,
				$eval_fcurso->p5_10,
				$eval_fcurso->p5_11
			];
			
			//6. INSTRUCTOR TRES
			$eval_fcurso->p6_1 = $request->p6_1;
			$eval_fcurso->p6_2 = $request->p6_2;
			$eval_fcurso->p6_3 = $request->p6_3;
			$eval_fcurso->p6_4 = $request->p6_4;
			$eval_fcurso->p6_5 = $request->p6_5;
			$eval_fcurso->p6_6 = $request->p6_6;
			$eval_fcurso->p6_7 = $request->p6_7;
			$eval_fcurso->p6_8 = $request->p6_8;
			$eval_fcurso->p6_9 = $request->p6_9;
			$eval_fcurso->p6_10 = $request->p6_10;
			$eval_fcurso->p6_11 = $request->p6_11;
			$promedio_p6=[
				$eval_fcurso->p6_1,
				$eval_fcurso->p6_2,
				$eval_fcurso->p6_3,
				$eval_fcurso->p6_4,
				$eval_fcurso->p6_5,
				$eval_fcurso->p6_6,
				$eval_fcurso->p6_7,
				$eval_fcurso->p6_8,
				$eval_fcurso->p6_9,
				$eval_fcurso->p6_10,
				$eval_fcurso->p6_11			
			];
				
			//7.¿RECOMENDARÍA EL CURSO A OTROS PROFESORES?
			$eval_fcurso->p7 = $request->p7;
			//return $eval_fcurso->p7;
			
			//8. ¿CÓMO SE ENTERÓ DEL CURSO?
			$eval_fcurso->p8 = $request->p8;
			//Lo mejor del curso fue:
			$eval_fcurso->mejor = $request->mejor;
			//Sugerencias y recomendaciones:	
			$eval_fcurso->sug = $request->sug;
			//¿Qué otros cursos, talleres, seminarios o temáticos le gustaría que se impartiesen o tomasen en cuenta para próximas actividades?
			$eval_fcurso->otros = $request->otros;
			//ÁREA DE CONOCIMIENTO
			$eval_fcurso->conocimiento = $request->conocimiento;
			//Temáticas:	
			$eval_fcurso->tematica = $request->tematica;
			//¿En qué horarios le gustaría que se impartiesen los cursos, talleres, seminarios o diplomados?
			//Horarios Semestrales:
			$eval_fcurso->horarios = $request->horarios;	
			//Horarios Intersemestrales:
			$eval_fcurso->horarioi = $request->horarioi;
			$eval_fcurso->curso_id = $curso_id;

            $string_vals = ['mejor','sug','otros','conocimiento','tematica','horarios','horarioi'];

            foreach($eval_fcurso->getAttributes() as $key => $value){
                if($value == null){
                    if($key == 'p7'){
                        $eval_fcurso->$key = -1;
                    }else if(in_array($key,$string_vals,TRUE)){
                        $eval_fcurso->$key = '';
                    }else if($key == 'p8[0]'){
                        $eval_fcurso->$key = [''];
                    }else{
                        $eval_fcurso->$key = 0;
                    }
                }
            }

			$eval_fcurso->save();
		}catch (\Exception $e){
			//En caso de que no se haya evaluado correctamente el curso regresamos a la vista anterior indicando que la evaluación fue errónea
			Session::flash('message','Sucedió un error al contestar el formulario. Favor de llenar todas las preguntas o revisar que el usuario en cuestión no lo haya contestado');
			Session::flash('alert-class', 'alert-danger'); 

			return redirect()->back()->withInput($request->input());
		}
		//Pasos despreciados, usados en versiones antiguas para obtener el promedio de toda la evaluación
		$promedio=[
			$eval_fcurso->p1_1,
			$eval_fcurso->p1_2,
			$eval_fcurso->p1_3,
			$eval_fcurso->p1_4,
			$eval_fcurso->p1_5,
			$eval_fcurso->p2_1,
			$eval_fcurso->p2_2,
			$eval_fcurso->p2_3,
			$eval_fcurso->p2_4,
			$eval_fcurso->p3_1,
			$eval_fcurso->p3_2,
			$eval_fcurso->p3_3,
			$eval_fcurso->p3_4,
			$eval_fcurso->p4_1,
			$eval_fcurso->p4_2,
			$eval_fcurso->p4_3,
			$eval_fcurso->p4_4,
			$eval_fcurso->p4_5,
			$eval_fcurso->p4_6,
			$eval_fcurso->p4_7,
			$eval_fcurso->p4_8,
			$eval_fcurso->p4_9,
			$eval_fcurso->p4_10,
			$eval_fcurso->p4_11,
			$eval_fcurso->p5_1,
			$eval_fcurso->p5_2,
			$eval_fcurso->p5_3,
			$eval_fcurso->p5_4,
			$eval_fcurso->p5_5,
			$eval_fcurso->p5_6,
			$eval_fcurso->p5_7,
			$eval_fcurso->p5_8,
			$eval_fcurso->p5_9,
			$eval_fcurso->p5_10,
			$eval_fcurso->p5_11
		];
		$pg=collect($promedio)->average()*2*10;
		$p1=collect($promedio_p1)->average()*2*10;
		$p2=collect($promedio_p2)->average()*2*10;
		$p3=collect($promedio_p3)->average()*2*10;
		$p4=collect($promedio_p4)->average()*2*10;
		$p5=collect($promedio_p5)->average()*2*10;

		//Actualizar campo de hoja de evaluacion
		DB::table('participante_curso')
			->where('id', $participante[0]->id)
			->where('curso_id',$curso_id)
			->update(['contesto_hoja_evaluacion' => true]);

	 
        return redirect()->route('cd.evaluacion',[$curso_id]);
    }

    public function saveFinal_Seminario(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
        $promedio_p1 = new EvaluacionFinalSeminario;
        $correo = new EvaluacionFinalSeminario;

		$participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
        if(sizeof($participante) > 0){
            $evaluacion_id = DB::table('_evaluacion_final_seminario')
                ->select('id')
                ->where([['participante_curso_id',$participante[0]->id],['curso_id',$curso_id]])
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
			Session::flash('message','Favor de contestar todas las preguntas del formulario');
			Session::flash('alert-class', 'alert-danger'); 

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

	public function modificarEvaluacion(Request $request, int $curso_id, int $profesor_id){
    $profesor = Profesor::findOrFail($profesor_id);
    $curso = Curso::findOrFail($curso_id);
    $catalogo = CatalogoCurso::findOrFail($curso->catalogo_id);
    $instructores = $curso->getInstructores();

    $participante = ParticipantesCurso::select('id','curso_id')
      ->where('curso_id',$curso->id)
      ->where('profesor_id',$profesor->id)
      ->get()->first();
    if(!$participante){
      Session::flash('message','Problemas con el participante');
			Session::flash('alert-class', 'alert-danger'); 
      return redirect()->back();
    }

		if($catalogo->tipo == 'S'){
			$evaluacion_final = EvaluacionFinalSeminario::where('participante_curso_id',$participante->id)->get();
		}else{
			$evaluacion_final = EvaluacionFinalCurso::where('participante_curso_id',$participante->id)->get();
		}

		if($evaluacion_final->isEmpty()){
      Session::flash('message','El curso o seminario no ha sido evaluado, favor de evaluarlo.');
			Session::flash('alert-class', 'alert-danger'); 
			return redirect()->back()->withInput($request->input());
    }

    if($catalogo->tipo === "S"){
      return view("pages.final_seminario_modificar")
        ->with("profesor",$profesor)
        ->with("curso",$curso)
        ->with('catalogoCurso',$catalogo)
        ->with('evaluacion',$evaluacion_final->first())
        ->with('instructores',$instructores)
        ->with('cadena_instructores',$curso->getCadenaInstructores());
		}else{
      return view("pages.final_curso_modificar")
        ->with("profesor",$profesor)
        ->with("curso",$curso)
        ->with('catalogoCurso',$catalogo)
        ->with('evaluacion',$evaluacion_final->first())
        ->with('instructores',$instructores)
        ->with('cadena_instructores',$curso->getCadenaInstructores());
    }
  }

	public function changeFinal_Curso(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
        $participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
        return $this->saveFinal_Curso($request,$profesor_id,$curso_id, $catalogoCurso_id);
    }

	public function changeFinal_Seminario(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
        $participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
        return $this->saveFinal_Seminario($request,$profesor_id,$curso_id, $catalogoCurso_id);
    }


}
