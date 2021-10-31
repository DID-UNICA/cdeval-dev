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

        Session::put('sesion','cd');
        Session::put('url','CD');

        return view('pages.homeCD')
            ->with('semestre_anio',$reversed)
            ->with('coordinaciones',$coordinaciones); //Route -> coordinador
    }

    public function area(String $semestreEnv, String $periodo, String $division){

        $fecha=$semestreEnv;
        $semestre=explode('-',$fecha);
        $periodo=$periodo;
        $coordinacion_nombre = $division;

        $cursos = DB::table('cursos')
            ->join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
            ->join('coordinacions','coordinacions.id','=','coordinacion_id')
            ->select('catalogo_cursos.nombre_curso','cursos.id')
            ->where([['cursos.semestre_anio',$semestre[0]],['cursos.semestre_pi',$semestre[1]],['cursos.semestre_si',$periodo],['coordinacions.nombre_coordinacion',$coordinacion_nombre]])
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
        /*if(Session::has('message')){
            Session::flash('message','Sucedió un error al contestar el formulario. Favor de llenar todas las preguntas o revisar que el usuario en cuestión no lo haya contestado');
			Session::flash('alert-class', 'alert-danger');
        }*/
        
        $coordinacion_id = DB::table('coordinacions')
            ->select('id')
            ->where('nombre_coordinacion',$coordinacion_nombre)
            ->get();

        return view('pages.area')
            ->with('datos',$datos)
            ->with('coordinacion',$coordinacion_nombre)
            ->with('coordinacion_id',$coordinacion_id[0]->id)
            ->with('semestre',$semestreEnv)
            ->with('periodo',$periodo);

    }

    public function evaluacion(int $id){

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
            Session::flash('message','No es posible realizar alguna evaluación, el curso '.$catalogo_curso[0]->nombre_curso.' no cuenta con participantes inscritos');
			Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }

        return view('pages.eval')
            ->with('datos',$datos)
            ->with('id',$id);
    }

    public function buscarCurso(Request $request, $coordinacion_id,$semestreEnv,$periodo){
        $fecha=$semestreEnv;
        $busqueda = $request->get('pattern');
		$tipo = $request->get('type');

		$datos = array();
        $cursos = '';

        $datos_coordinacion = DB::table('coordinacions')
			->select(['id','nombre_coordinacion'])
            ->where([['id',$coordinacion_id]])
            ->get();

        $fecha = Carbon::now();
        
        $fecha = ($fecha->month==8)? $fecha->subWeek() : (($fecha->month==1)? $fecha->addWeek() : $fecha);

        $periodo_si = $request->filled('periodo_anio')? $request->periodo_si : (in_array($fecha->month,array(1, 6, 7, 12))? 'i':'s');
        $periodo_pi = $request->filled('periodo_anio')? $request->periodo_pi : (in_array($fecha->month,array(2, 3, 4, 5, 6, 7))? '2':'1');
        $periodo_anio = $request->filled('periodo_anio')? $request->periodo_anio : (in_array($fecha->month,array(8, 9, 10, 11, 12))? $fecha->year+1:$fecha->year);

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

            $words=explode(" ", $request->pattern);
            foreach($words as $word){
                /*$profesores = Profesor::select('id')->whereRaw("lower(unaccent(nombres)) ILIKE lower(unaccent('%".$word."%')) or lower(unaccent(apellido_paterno)) ILIKE lower(unaccent('%".$word."%'))")
                ->orWhereRaw("lower(unaccent(apellido_paterno)) ILIKE lower(unaccent('%".$word."%'))")
                ->orWhereaw("lower(unaccent(apellido_materno)) ILIKE lower(unaccent('%".$word."%'))")
                ->get();*/
                //$profesores = Profesor::select('id')->where(DB::raw("(lower(unaccent(nombres)) LIKE lower(unaccent('%".$word."%'))) OR (lower(unaccent(apellido_paterno)) LIKE lower(unaccent('%".$word."%'))) OR (lower(unaccent(apellido_materno)) LIKE lower(unaccent('%".$word."%')))"))->get();
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

        Session::put('sesion','cd');
        Session::put('url','CD');

		

            return view('pages.area')
            ->with('datos',$datos)
            ->with('periodo',$periodo)
            ->with('semestre',$semestreEnv)
            ->with('semestre_anio',$reversed)
            ->with('coordinacion',$datos_coordinacion[0]->nombre_coordinacion)
            ->with('coordinacion_id',$datos_coordinacion[0]->id);
    }

    public function buscarInstructor (Request $request, int $curso_id){
        $profesores = array();

            $words=explode(" ", $request->pattern);
            foreach($words as $word){
                $profesores = Profesor::select('id')->whereRaw("lower(unaccent(nombres)) ILIKE lower(unaccent('%".$word."%')) or lower(unaccent(apellido_paterno)) ILIKE lower(unaccent('%".$word."%'))")
                ->orWhereRaw("lower(unaccent(apellido_paterno)) ILIKE lower(unaccent('%".$word."%'))")
                ->orWhereRaw("lower(unaccent(apellido_materno)) ILIKE lower(unaccent('%".$word."%'))")
                ->get();
                //$profesores = Profesor::select('id')->where(DB::raw("(lower(unaccent(nombres)) LIKE lower(unaccent('%".$word."%'))) OR (lower(unaccent(apellido_paterno)) LIKE lower(unaccent('%".$word."%'))) OR (lower(unaccent(apellido_materno)) LIKE lower(unaccent('%".$word."%')))"))->get();
                //$profesor = Profesor::select('id','nombres','apellido_paterno','apellido_materno')->whereRaw("(lower(unaccent(nombres)) LIKE unaccent(lower('%".$word."%'))) OR (unaccent(lower(apellido_paterno)) LIKE unaccent(lower('%".$word."%'))) OR (unaccent(lower(apellido_materno)) LIKE unaccent(lower('%".$word."%'))")->get();
                //return 'hola';
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
                        ->where( 'pc.id','=',$prof->id)
                        ->get();
                    
                    array_push($datos, $dato[0]);
                }
            }
    
            return view('pages.eval')
                ->with('datos',$datos)
                ->with('id',$curso_id);
    }

    public function evaluacionVista(Request $request, int $curso_id, int $profesor_id){
        $profesor = Profesor::find($profesor_id);
		$curso = Curso::find($curso_id);
		$catalogoCurso = CatalogoCurso::find($curso->catalogo_id);
		$count = DB::table('profesor_curso')
			->where('curso_id',$curso_id)
			->count();
        $participante_curo = DB::table('participante_curso')
            ->select('id')
            ->where([['profesor_id',$profesor_id],['curso_id',$curso_id]])
            ->get();
		//Se busca mandar a pages.evaluacionIndex las encuestas realizadas por el usuario para manejar los botones
		//Se busca evitar que el usuario realice una evaluación por segunda vez
		$evaluacion_final_curso = 0;
		if(strcmp($catalogoCurso->tipo,"S") == 0){
			$evaluacion_final_curso = DB::table('_evaluacion_final_seminario')
                ->join('participante_curso','participante_curso.id','=','_evaluacion_final_seminario.participante_curso_id')
				->select('_evaluacion_final_seminario.participante_curso_id','participante_curso.curso_id')
				->where([['_evaluacion_final_seminario.participante_curso_id',$participante_curo[0]->id],['participante_curso.curso_id',$curso_id]])
				->get();
		}
		else{
			$evaluacion_final_curso = DB::table('_evaluacion_final_curso')
            ->join('participante_curso','participante_curso.id','=','_evaluacion_final_curso.participante_curso_id')
			->select('_evaluacion_final_curso.participante_curso_id','participante_curso.curso_id')
			->where([['participante_curso.curso_id',$curso_id],['_evaluacion_final_curso.participante_curso_id',$participante_curo[0]->id]])
			->get();
		}

        if(sizeof($evaluacion_final_curso) > 0){
            Session::flash('message','Usuario '.$profesor->apellido_paterno.' '.$profesor->apellido_materno.' '.$profesor->nombres.' ya respondió la evaluación');
			Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }else if(strcmp($catalogoCurso->tipo,"S") == 0){
            if($count==1){
                return view("pages.final_seminario_1")
					->with("profesor",$profesor)
                    ->with("curso",$curso)
                    ->with('catalogoCurso',$catalogoCurso);
			}elseif($count==2){
                return view("pages.final_seminario_2")
					->with("profesor",$profesor)
                    ->with("curso",$curso)
                    ->with('catalogoCurso',$catalogoCurso);
			}elseif($count==3){
                return view("pages.final_seminario_3")
                    ->with("profesor",$profesor)
                    ->with("curso",$curso)
                    ->with('catalogoCurso',$catalogoCurso);
			}
        }else{
			if($count==1){
				return view("pages.final_curso_1")
					->with("profesor",$profesor)
					->with("curso",$curso)
					->with('catalogoCurso',$catalogoCurso);
			}elseif($count==2){
				return view("pages.final_curso_2")
					->with("profesor",$profesor)
					->with("curso",$curso)
					->with('catalogoCurso',$catalogoCurso);
			}elseif($count==3){
				return view("pages.final_curso_3")
					->with("profesor",$profesor)
					->with("curso",$curso)
					->with('catalogoCurso',$catalogoCurso);
			}          
		}
        
    }

    public function saveFinal_Curso(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
        $participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();

        if(sizeof($participante) > 0){
            $evaluacion_id = DB::table('_evaluacion_final_curso as e')
                ->join('participante_curso as p','p.id','=','e.participante_curso_id')
                ->select('e.id')
                ->where([['e.participante_curso_id',$participante[0]->id],['p.curso_id',$curso_id]])
                ->get();
            if(sizeof($evaluacion_id) > 0){
                $eval_fcurso = EvaluacionFinalCurso::find($evaluacion_id[0]->id);
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

    public function participantes($curso_id){
        $participantes = DB::table('participante_curso')
            ->where([['curso_id',$curso_id]])
            ->get();
        $curso = Curso::find($curso_id);
        $users = array();
        if(sizeof($participantes) == 0){
            Session::flash('message','Por el momento no hay alumnos inscritos en el curso');
			Session::flash('alert-class', 'alert-danger'); 

			return redirect()->back();
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

    public function enviarVista($request, $cursos, $nombreCoordinacion, $lugar, $pdf, $inicio, $semestral){

        //Obtenemos todos los coordinadores

        $evaluacionesCursos = array();

        $nombresCursos = array();
        $inscritos = 0;
        $acreditaron = 0;
        $capacidad_total = 0;
        $asistieron = 0;

        //Usado para la seccion 2 de evaluacion_global
        foreach($cursos as $curso){

            //Aumentamos la capacidad total de todos los cursos
            $capacidad_total += intval($curso->cupo_maximo);
            $catalogo = DB::table('catalogo_cursos')
                ->where('id',$curso->catalogo_id)
                ->get();

            //Obtenemos los nombres de los cursos
            array_push($nombresCursos,$catalogo[0]->nombre_curso);

            //Las evaluaciones finales de los cursos
            $eval = DB::table('_evaluacion_final_curso')
                ->where('curso_id',$curso->id)
                ->get();
            
            //Las evaluaciones finales de los seminarios
            $eval2 = DB::table('_evaluacion_final_seminario')
                ->where('curso_id',$curso->id)
                ->get();

            //Obtenemos los participantes de los cursos
            $participantes = DB::table('participante_curso')
                ->where('curso_id',$curso->id)
                ->get();

            //Necesario para el factor de acreditacion
            foreach($participantes as $participante){
                if($participante->acreditacion == 1){
                    //Aumentamos la cantidad de acreditaciones
                    $acreditaron++;
                }
                if($participante->asistencia == 1){
                    //Aumentamos la cantidad de asistencia
                    $asistieron++;
                }
            }

            //Aumentamos la cantidad de inscritos
            $inscritos += sizeof($participantes);

            //Si hay evaluacions finales de cursos los incluimos en el arreglo de evaluacionesCursos
            if(sizeof($eval)>0){
                array_push($evaluacionesCursos,$eval);
            }
            //Si hay evaluacions finales de seminarios los incluimos en el arreglo de evaluacionesCursos
            if(sizeof($eval2)>0){
                array_push($evaluacionesCursos,$eval2);
            }
        }

        if(sizeof($evaluacionesCursos)==0){
            Session::flash('message','Periodo seleccionado no cuenta con una evaluacion');
			Session::flash('alert-class', 'alert-danger'); 

			return redirect()->back()->withInput();
        }

        $DP=0;
        $DH=0;
        $CO=0;
        $DI=0;
        $Otros=0;
        $DPtematica = array();
        $DHtematica = array();
        $COtematica = array();
        $DItematica = array();
        $Otrostematica = array();
        //Obtenemos la cantidad de participantes de cada division y las tematcias solicitadas por cada division
        foreach($evaluacionesCursos as $evals)
            foreach($evals as $evaluacion){
                $array = explode(',',$evaluacion->conocimiento);
                foreach($array as $elem){
                    if($elem[2] == 1 || $elem[1] == 1){
                        $DP++;
                        array_push($DPtematica,$evaluacion->tematica);
                    }else if($elem[2] == 2 || $elem[1] == 2){
                        $DH++;
                        array_push($DHtematica,$evaluacion->tematica);
                    }else if($elem[2] == 3 || $elem[1] == 3){
                        $CO++;
                        array_push($COtematica,$evaluacion->tematica);
                    }else if($elem[2] == 4 || $elem[1] == 4){
                        $DI++;
                        array_push($DItematica,$evaluacion->tematica);
                    }else if($elem[2] == 5 || $elem[1] == 5){
                        $Otros++;
                        array_push($Otrostematica,$evaluacion->tematica);
                    }
                }
		    }
		
        $alumnos = 0;
        $contestaron = 0;
        $recomendaciones = 0;
        $alumnosRecomendaron = 0;
        $positivas = 0;
        $preguntas = 0;
        $respuestasContenido = 0;
        $respuestasCoordinacion = 0;
        $horariosCurso = array();
        $profesoresRecontratar = array();
        $curso_recomendaron = 0;
        $evaluacionProfesor = 0;
        $preguntas_contenido = 0;
        $preguntas_coordinacion = 0;

        $cont_prom = array();

        $desempenioProfesores = array(); 

        foreach($evaluacionesCursos as $curso){
            $curso_id = $curso[0]->curso_id;
            $profesores = DB::table('profesor_curso')
                ->where('curso_id',$curso_id)
                ->get();

            $acreditaronCurso = 0;
            $alumno_curso = 0;
            $recomendaciones_curso = 0;
            $alumnos_recomendaron_curso = 0;
            $positivas_curso = 0;
            $preguntas_curso = 0;

            $desempenioProfesor1 = 0;
            $desempenioProfesor2 = 0;
            $desempenioProfesor3 = 0;

            $instructor_1 = 0;
            $instructor_2 = 0;
            $instructor_3 = 0;

            $desempenioProfesoresCurso = array();

            $cont_curso = 0;
            $tam_curso = 0;

            $min = 100;
            $min2 = 100;
            $min3 = 100;

            $max = 0;
            $max2 = 0;
            $max3 = 0;

            foreach($curso as $evaluacion){

                $temp_1 = 0;
                $temp_2 = 0;
                $temp_3 = 0;

                $tam_1 = 0;
                $tam_2 = 0;
                $tam_3 = 0;

                $tupla = array();

                $alumno_curso++;

                //Obtenemos los datos del alumno
                $alumno = DB::table('participante_curso')
                    ->where('id',$evaluacion->participante_curso_id)
                    ->get();
                
                //Obtenemos numero de acreditacion de los usuarios
                if(intval($alumno[0]->acreditacion) == 1){
                    $acreditaronCurso++;
                }

                //Obtenemos y guardamos los horarios pedidos por cada usuario
                $horarios = array($evaluacion->horarios,$evaluacion->horarioi);
                array_push($horariosCurso,$horarios);

                $contestaron++;

                //Necesario para obtener el factor de recomendacion
                //En este caso necesitamos obtener el factor de recomendacion general (recomendaciones) y el individual de cada curso (recomendaciones_curso)
                if($evaluacion->p7 == 1){
                    $recomendaciones_curso++;
                    $alumnos_recomendaron_curso++;
                    $recomendaciones++;
                    $alumnosRecomendaron++;
                }else if($evaluacion->p7 == 0){
                    $alumnos_recomendaron_curso++;
                    $alumnosRecomendaron++;
                }

                //Obtenemos la cantidad de preguntas positivas del curso valor >= 60
                //De las preguntas 1_1 a 1_5 obtenemmos las evaluaciones del contenido del curso
                if($evaluacion->p1_1 >= 50){
                    $preguntas_contenido++;
                    $preguntas++;
                    $preguntas_curso++;
                    $respuestasContenido += $evaluacion->p1_1;
                    $cont_curso += $evaluacion->p1_1;
                    $tam_curso++;
                    if($evaluacion->p1_1 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p1_2 >= 50){
                    $preguntas_contenido++;
                    $preguntas++;
                    $preguntas_curso++;
                    $respuestasContenido+= $evaluacion->p1_2;
                    $cont_curso += $evaluacion->p1_2;
                    $tam_curso++;
                    if($evaluacion->p1_2 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p1_3 >= 50){
                    $preguntas_contenido++;
                    $preguntas++;
                    $preguntas_curso++;
                    $respuestasContenido+= $evaluacion->p1_3;
                    $cont_curso += $evaluacion->p1_3;
                    $tam_curso++;
                    if($evaluacion->p1_3 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p1_4 >= 50){
                    $preguntas_contenido++;
                    $preguntas++;
                    $preguntas_curso++;
                    $respuestasContenido+= $evaluacion->p1_4;
                    $cont_curso += $evaluacion->p1_4;
                    $tam_curso++;
                    if($evaluacion->p1_4 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p1_5 >= 50){
                    $preguntas_contenido++;
                    $preguntas++;
                    $preguntas_curso++;
                    $respuestasContenido+= $evaluacion->p1_5;
                    $cont_curso += $evaluacion->p1_5;
                    $tam_curso++;
                    if($evaluacion->p1_5 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
    
                if($evaluacion->p2_1 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    if($evaluacion->p2_1 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p2_2 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    if($evaluacion->p2_2 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p2_3 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    if($evaluacion->p2_3 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p2_4 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    if($evaluacion->p2_4 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
    
                //De las preguntas 3_1 a 3_4 obtenemos el puntaje dado a la coordinacion
                if($evaluacion->p3_1 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $respuestasCoordinacion += $evaluacion->p3_1;
                    $preguntas_coordinacion++;
                    if($evaluacion->p3_1 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p3_2 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $preguntas_coordinacion++;
                    $respuestasCoordinacion += $evaluacion->p3_2;
                    if($evaluacion->p3_2 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p3_3 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $preguntas_coordinacion++;
                    $respuestasCoordinacion += $evaluacion->p3_3;
                    if($evaluacion->p3_3 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p3_4 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $preguntas_coordinacion++;
                    $respuestasCoordinacion += $evaluacion->p3_4;
                    if($evaluacion->p3_4 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
    
                //De la 4_1 a la 4_11 obtenemos la evaluacion del primer instructor
                //Queremos tanto el desempeño del instructor del curso como la cantidad de preguntas positivas del instructor
                if($evaluacion->p4_1 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_1;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_1;
                    $tam_1++;
                    if($evaluacion->p4_1 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_2 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_2;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_2;
                    $tam_1++;
                    if($evaluacion->p4_2 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_3 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_3;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_3;
                    $tam_1++;
                    if($evaluacion->p4_3 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_4 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_4;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_4;
                    $tam_1++;
                    if($evaluacion->p4_4 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_5 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_5;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_5;
                    $tam_1++;
                    if($evaluacion->p4_5 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_6 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_6;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_6;
                    $tam_1++;
                    if($evaluacion->p4_6 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_7 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_7;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_7;
                    $tam_1++;
                    if($evaluacion->p4_7 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_8 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_8;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_8;
                    $tam_1++;
                    if($evaluacion->p4_8 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_9 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_9;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_9;
                    $tam_1++;
                    if($evaluacion->p4_9 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_10 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_10;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_10;
                    $tam_1++;
                    if($evaluacion->p4_10 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p4_11 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor1 += $evaluacion->p4_11;
                    $instructor_1++;
                    $temp_1 += $evaluacion->p4_11;
                    $tam_1++;
                    if($evaluacion->p4_11 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
    
                //De la 5_1 a la 5_11 obtenemos la evaluacion del segundo instructor
                //Queremos tanto el desempeño del instructor del curso como la cantidad de preguntas positivas del instructor
                if($evaluacion->p5_1 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_1;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_1;
                    $tam_2++;
                    if($evaluacion->p5_1 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_2 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_2;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_2;
                    $tam_2++;
                    if($evaluacion->p5_2 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_3 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_3;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_3;
                    $tam_2++;
                    if($evaluacion->p5_3 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_4 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_4;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_4;
                    $tam_2++;
                    if($evaluacion->p5_4 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_5 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_5;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_5;
                    $tam_2++;
                    if($evaluacion->p5_5 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_6 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_6;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_6;
                    $tam_2++;
                    if($evaluacion->p5_6 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_7 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_7;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_7;
                    $tam_2++;
                    if($evaluacion->p5_7 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_8 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_8;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_8;
                    $tam_2++;
                    if($evaluacion->p5_8 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_9 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_9;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_9;
                    $tam_2++;
                    if($evaluacion->p5_9 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_10 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_10;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_10;
                    $tam_2++;
                    if($evaluacion->p5_10 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p5_11 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor2 += $evaluacion->p5_11;
                    $instructor_2++;
                    $temp_2 += $evaluacion->p5_11;
                    $tam_2++;
                    if($evaluacion->p5_11 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
    
                //De la 6_1 a la 6_11 obtenemos la evaluacion del tercer instructor
                //Queremos tanto el desempeño del instructor del curso como la cantidad de preguntas positivas del instructor
                if($evaluacion->p6_1 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_1;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_1;
                    $tam_3++;
                    if($evaluacion->p6_1 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_2 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_2;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_2;
                    $tam_3++;
                    if($evaluacion->p6_2 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_3 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_3;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_3;
                    $tam_3++;
                    if($evaluacion->p6_3 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_4 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_4;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_4;
                    $tam_3++;
                    if($evaluacion->p6_4 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_5 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_5;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_5;
                    $tam_3++;
                    if($evaluacion->p6_5 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_6 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_6;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_6;
                    $tam_3++;
                    if($evaluacion->p6_6 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_7 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_7;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_7;
                    $tam_3++;
                    if($evaluacion->p6_7 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_8 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_8;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_8;
                    $tam_3++;
                    if($evaluacion->p6_8 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_9 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_9;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_9;
                    $tam_3++;
                    if($evaluacion->p6_9 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_10 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_10;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_10;
                    $tam_3++;
                    if($evaluacion->p6_10 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }
                if($evaluacion->p6_11 >= 50){
                    $preguntas++;
                    $preguntas_curso++;
                    $desempenioProfesor3 += $evaluacion->p6_11;
                    $instructor_3++;
                    $temp_3 += $evaluacion->p6_11;
                    $tam_3++;
                    if($evaluacion->p6_11 >= 80){
                        $positivas++;
                        $positivas_curso++;
                    }
                }

                if(($temp_1/$tam_1)>$max){
                    $max = round($temp_1/$tam_1,2);
                }elseif(($temp_1/$tam_1)<$min){
                    $min = round($temp_1/$tam_1,2);
                }
                if($temp_2>0){
                    if(($temp_2/$tam_2)>$max2){
                        $max2 = round($temp_2/$tam_2,2);
                    }elseif(($temp_2/$tam_2)<$min2){
                        $min2 = round($temp_2/$tam_2,2);
                    }   
                }
                if($temp_3>0){
                    if(($temp_3/$tam_3)>$max3){
                        $max3 = round($temp_3/$tam_3,2);
                    }elseif(($temp_3/$tam_3)<$min3){
                        $min3 = round($temp_3/$tam_3,2);
                    }   
                }
            }

            array_push($cont_prom, $cont_curso/$tam_curso);

            if($preguntas_curso == 0){
                $preguntas_curso = 1;
            }
            if($alumno_curso == 0){
                $alumno_curso = 1;
            }
            if($recomendaciones_curso == 0){
                $recomendaciones_curso = 1;
            }

            //Obtenemos factor de calidad del curso iterado, su factor de acreditacion y de recomendacion
            $factor_calidad_curso = ($positivas_curso*100)/$preguntas_curso;
            $factora_acreditacion = ($acreditaronCurso*100)/$alumno_curso;
            $factor_recomendacion_curso = ($alumnos_recomendaron_curso*100)/$recomendaciones_curso;

            array_push($desempenioProfesoresCurso,(round($desempenioProfesor1/$instructor_1,2)));
            if($instructor_2==0){
                array_push($desempenioProfesoresCurso,0);    
            }else{
                array_push($desempenioProfesoresCurso,(round($desempenioProfesor2/$instructor_2,2)));
            }
            if($instructor_3 == 0){
                array_push($desempenioProfesoresCurso,0);
            }else{
                array_push($desempenioProfesoresCurso,(round($desempenioProfesor3/$instructor_3,2)));
            }

            //Si un curso obtiene calificacion >= 80 en cada uno de los tres factores sus profesores se vuelven a contratar
            if($factor_calidad_curso >= 80 && $factora_acreditacion >= 80 && $factor_recomendacion_curso >= 80){
                //Obtenemos los datos de los profesores del curso
                $inList = 0;
                foreach($profesores as $profesors){

                    $profesor = DB::table('profesors')
                        ->where('id',$profesors->profesor_id)
                        ->get();
                    
                    //Guardamos los profesores en una lista a retornar
                    if($inList == 0){
                        $profesor_valores = array();
                        array_push($profesor_valores,$profesor[0]);
                        array_push($profesor_valores,$min);
                        array_push($profesor_valores,$max);
                        array_push($profesor_valores,round($desempenioProfesor1/$instructor_1,2));
                        array_push($profesoresRecontratar,$profesor_valores);
                    }
                    if($inList == 1){
                        $profesor_valores = array();
                        array_push($profesor_valores,$profesor[0]);
                        array_push($profesor_valores,$min2);
                        array_push($profesor_valores,$max2);
                        array_push($profesor_valores,round($desempenioProfesor2/$instructor_2,2));
                        array_push($profesoresRecontratar,$profesor_valores);
                    }
                    if($inList == 2){
                        $profesor_valores = array();
                        array_push($profesor_valores,$profesor[0]);
                        array_push($profesor_valores,$min3);
                        array_push($profesor_valores,$max3);
                        array_push($profesor_valores,round($desempenioProfesor3/$instructor_3,2));
                        array_push($profesoresRecontratar,$profesor_valores);
                    }
                    $inList++;
                }

            }

            array_push($desempenioProfesores, $desempenioProfesoresCurso);

        }

        $instructores_factor = 0;
        $num = 0;
        foreach($desempenioProfesores as $desempenio){
            foreach($desempenio as $calif){
                if($calif > 0){
                    $instructores_factor += $calif;
                    $num++;
                }
            }
        }


        $factor_acreditacion = 0;
        $factor_calidad = 0;
        $promedio_coordinacion = 0;
        $promedio_contenido = 0;
        $factor_recomendacion = 0;
        $factor_instructor = round($instructores_factor/$num,2);
        $factor_ocupacion = 0;

        //Obtenemos los factores de recomendacion
        //Necesario evitar la division entre cero, es posible pedir ver resumen de una fecha sin cursos
        if($alumnosRecomendaron != 0){
            $factor_recomendacion = round($recomendaciones*100 / $alumnosRecomendaron,2);
        }
        if($inscritos != 0){
            $factor_acreditacion = round($acreditaron*100 / $asistieron,2);
        }
        if($preguntas != 0){
            $factor_calidad = round($positivas*100 / $preguntas,2);
        }
        if($contestaron != 0){
            $promedio_coordinacion = round($respuestasCoordinacion / $preguntas_coordinacion,2);
            $promedio_contenido = round($respuestasContenido / $preguntas_contenido,2);
        }
        if($capacidad_total != 0){
            $factor_ocupacion = round((($asistieron*100)) / $capacidad_total,2);
        }
        $aritmetico = [0,0,0,0];
        if(strcmp($nombreCoordinacion,"")==0){
            $aritmetico = $this->calculaAritmetico($cursos);
        }else{
            $aritmetico = $this->calculaAritmeticoArea($cursos, $nombreCoordinacion);
        }

        //Si el usuario indico descargar un pdf se procedera a realizarlo
        if($pdf == 1){
            //Retornamos la funcion que permite la descarga del pdf
            return $this->descargarPDF($nombresCursos,$request,$acreditaron,$inscritos,$contestaron,$factor_ocupacion,$factor_recomendacion,$factor_acreditacion,$factor_calidad,$DP,$DH,$CO,$DI,$Otros,$DPtematica,$DItematica,$COtematica,$DHtematica,$Otrostematica,$horariosCurso,$promedio_coordinacion,$promedio_contenido,$profesoresRecontratar,$factor_instructor,$asistieron,$nombreCoordinacion,$lugar,$aritmetico[0],$aritmetico[1],$aritmetico[2],$aritmetico[3],$semestral);
        }

        //return $profesoresRecontratar;
        //Retornamos la vista correspondiente (seleccionados por fecah o seleccionados por fecha y coordinacion) con los datos calculados
        return view($lugar)
            ->with('nombres',$nombresCursos)
            ->with('periodo',$request)
            ->with('acreditaron',$acreditaron)
            ->with('inscritos',$inscritos)
            ->with('contestaron',$contestaron)
            ->with('factor_ocupacion',$factor_ocupacion)
            ->with('factor_ocupacion',$factor_ocupacion)
            ->with('factor_recomendacion',$factor_recomendacion)
            ->with('factor_acreditacion',$factor_acreditacion)
            ->with('positivas',$factor_calidad)
            ->with('DP',$DP)
            ->with('DH',$DH)
            ->with('CO',$CO)
            ->with('DI',$DI)
            ->with('Otros',$Otros)
            ->with('DPtematicas',$DPtematica)
            ->with('DItematicas',$DItematica)
            ->with('COtematicas',$COtematica)
            ->with('DHtematicas',$DHtematica)
            ->with('Otrostematicas',$Otrostematica)
            ->with('horarios',$horariosCurso)
            ->with('coordinacion',$promedio_coordinacion)
            ->with('contenido',$promedio_contenido)
            ->with('profesors',$profesoresRecontratar)
            ->with('instructor',$factor_instructor)
            ->with('asistencia',$asistieron)
            ->with('nombreCoordinacion',$nombreCoordinacion)
            ->with('aritmetico_contenido',$aritmetico[0])
            ->with('aritmetico_instructor',$aritmetico[1])
            ->with('aritmetico_coordinacion',$aritmetico[2])
            ->with('aritmetico_recomendacion',$aritmetico[3])
            ->with('semestral',$semestral)
            /*->with('encargado',$coordinadores[0]->id);*/;
    }

    /**
     * Función encargada de obtener los cálculos aritméticos de la evaluación global
     * @param $cursos: cursos obtenidos según la selecion del usuario
     * @return Los cálculos aritméticos
     */
    public function calculaAritmetico($cursos){
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
                if(strcmp($curso->tipo,'S')==0){
                    $evals = DB::table('_evaluacion_final_seminario')
                        ->where('curso_id',$curso->id)
                        ->get();
                }else{
                    $evals = DB::table('_evaluacion_final_curso')
                        ->where('curso_id',$curso->id)
                        ->get();   
                }

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
                    if(intval($eval->p7) == 1){
                        $factor_recomendacion_curso++;
                        $tam_recomendacion++;
                    }elseif(intval($eval->p7) == 0){
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

        $envio = 'pages.global';
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
                $evals = DB::table('_evaluacion_final_seminario')
                    ->where('curso_id',$curso->id)
                    ->get();
            else            
                $evals = DB::table('_evaluacion_final_curso')
                    ->where('curso_id',$curso->id)
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

                if(intval($eval->p7) == 1){
                    $factor_recomendacion_curso++;
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
                $factor_recomendacion_promedio += ($factor_recomendacion_curso*100)/$tam_curso;

        }


        //Serie de pasos necesarios para obtener el promedio de toda el área
        $factor_contenido_aritmetico = round($contenido_promedio / $tam_coordinacion,2);
        $factor_instructor_aritmetico = round($instructor_promedio / $tam_coordinacion,2);
        $factor_coordinacion_aritmetico = round($coordinacion_promedio / $tam_coordinacion,2);
        $factor_recomendacion_aritmetico = round($factor_recomendacion_promedio / $tam_coordinacion,2);

        $aritmetico = [$factor_contenido_aritmetico,$factor_instructor_aritmetico,$factor_coordinacion_aritmetico,$factor_recomendacion_aritmetico];
        return $aritmetico;

    }

    public function enviarArea($semestre, $periodo, $coordinacion_id){
        //Obtenemos la fecha y la coordinacion seleccionadas por el usuario
        $fecha = explode('-',$semestre);

        $coordinacion_id = $coordinacion_id;
        $coordinaciones = DB::table('coordinacions')
            ->where('id',$coordinacion_id)
            ->get();

        //Buscamos los cursos de dicha coordinacion
        $catalogs = DB::table('catalogo_cursos')
            ->where('coordinacion_id',$coordinacion_id)
            ->get();

        //return $request->get('periodo');
        //Buscamos los cursos de dicha fecha
        $cursosFecha = DB::table('cursos')
            ->where([['semestre_anio',$fecha[0]],['semestre_pi',$fecha[1]],['semestre_si',$periodo]])
            ->get();

        $cursos = array();
        
        //Buscamos los cursos que coinciden en fecha y coordinacion
        foreach($catalogs as $catalogo){
            foreach($cursosFecha as $curso){
                if($curso->catalogo_id == $catalogo->id){
                    array_push($cursos,$curso);
                    break;
                }
            }
        }

        $evaluacionesCursos = array();
        foreach($cursos as $curso){

            //Las evaluaciones finales de los cursos
            $eval = DB::table('_evaluacion_final_curso')
                ->where('curso_id',$curso->id)
                ->get();
            
            //Las evaluaciones finales de los seminarios
            $eval2 = DB::table('_evaluacion_final_seminario')
                ->where('curso_id',$curso->id)
                ->get();

            //Si hay evaluacions finales de cursos los incluimos en el arreglo de evaluacionesCursos
            if(sizeof($eval)>0){
                array_push($evaluacionesCursos,$eval);
            }
            //Si hay evaluacions finales de seminarios los incluimos en el arreglo de evaluacionesCursos
            if(sizeof($eval2)>0){
                array_push($evaluacionesCursos,$eval2);
            }
        }

        if(sizeof($evaluacionesCursos)==0){
            return redirect()->route('cd.area',['Ningun curso, del periodo indicado, ha sido evaluado.']);
        }

        //Pasamos el nombre de la coordinacion y la vista a retornar
        $nombreCoordinacion = $coordinaciones[0]->nombre_coordinacion;
        $lugar = "pages.reporte_final_area";
        return $this->enviarVista($semestre, $cursos, $nombreCoordinacion, $lugar,1,'elegir.coordinacion',$periodo);
    }

    public function reporteFinalCurso($curso_id){

		$evals = 0;

        $catalogoCurso_id = DB::table('cursos')
            ->where('id',$curso_id)
            ->get('catalogo_id');

        $catalogoCurso = DB::table('catalogo_cursos')
            ->where('id',$catalogoCurso_id[0]->catalogo_id)
            ->get('tipo');

		//Checamos si el usuario desea los reportes de los cursos o de los seminarios
		if(strcmp($catalogoCurso[0]->tipo,'S')==0){
            $evals = DB::table('_evaluacion_final_seminario as e')
                ->join('participante_curso as p','p.id','=','e.participante_curso_id')
			    ->where("p.curso_id",$curso_id)
                ->get();

		}else{
			$evals = DB::table('_evaluacion_final_curso as e')
                ->join('participante_curso as p','p.id','=','e.participante_curso_id')
			    ->where("p.curso_id",$curso_id)
                ->get();
        }

        if(sizeof($evals) == 0){
            Session::flash('message','Curso no cuenta con evaluación');
			Session::flash('alert-class', 'alert-danger'); 

			return redirect()->back();
        }

        $contestaron = sizeof($evals);

		//Obtenemos el id de los instructores de los cursos
		$instructores = DB::table('profesor_curso')
			->where('curso_id',$curso_id)
			->get();

		//Obtenemos los datos de los instructores de cada curso
		$nombreInstructor = array();
		foreach($instructores as $instructorCurso){
			$instructor = DB::table('profesors')
				->where('id',$instructorCurso->profesor_id)
				->get();
			array_push($nombreInstructor,$instructor[0]);
		}

		//Obtenemos el cupo maximo del curso en cuestion
		$curso_ocupacion = DB::table("cursos")
			->where("id",$curso_id)
			->value("cupo_maximo");

		//Obtenemos los participantes del curso
		$participantes = DB::table('participante_curso')
			->where('curso_id',$curso_id)
			->get();

		//Obtenemos el curso?
		$curso = DB::table('cursos')
			->where('id',$curso_id)
			->get();

		//Obtenemos los datos del curso
		$catalogo_curso = DB::table('catalogo_cursos')
			->where('id',$curso[0]->catalogo_id)
			->get();

		//Obtenemos el salon donde se imparte el curso
		$salon = DB::table('salons')
			->where('id',$curso[0]->salon_id)
			->get();

		//Obtenemos el factor de recomendación y de asistencia
		$recomendaciones = 0;
        $factor = 0;
		$alumnos = 0;

        foreach($evals as $array){
			//Si la pregunta 7 vale uno es curso es recomendado
            if($array->p7 == 1){
                $recomendaciones = $recomendaciones + 1;
                $alumnos = $alumnos + 1;
            }else if($array->p7 == 0){
                $alumnos = $alumnos + 1;
            }
		}
		
		//Obtenemos el factor de recomendacion
        if($alumnos == 0){
            $factor = round(($recomendaciones * 100) / 1,2);
        }else
        {
            $factor = round(($recomendaciones * 100) / $alumnos,2);
		}

		//Obtenemos el factor de acreditación y la asistencia
		$acreditado = 0;
		$factor_acreditacion = 0;
		$alumnos = 0;
		$asistieron = 0;
		foreach($participantes as $participante){
			$alumnos = $alumnos + 1;
			if($participante->acreditacion == 1){
				$acreditado = $acreditado + 1;
			}
			if($participante->asistencia == 1){
				$asistieron++;
			}
		}

		//Obtenemos el factor de acreditacion 
		if($alumnos == 0){
			$factor_acreditacion = round(($acreditado * 100) / 1,2);
		}else
		{
			$factor_acreditacion = round(($acreditado * 100) / $asistieron,2);
		}

		//Obtenemos el factor de ocupacion
		$ocupacion = ($asistieron*100)/$curso_ocupacion;

		//Obtenemos la cantidad de integrantes de cada area
		$DP=0;
        $DH=0;
        $CO=0;
        $DI=0;
        $Otros=0;
        foreach($evals as $evaluacion){
            $array = explode(',',$evaluacion->conocimiento);
            foreach($array as $elem){
                if($elem[2] == 1 || $elem[1] == 1){
					//Aumentamos numero integrante Division Pedagogia
					$DP++;
                }else if($elem[2] == 2 || $elem[1] == 2){
					//Aumentamos numero integrantes division desarrollo humano
                    $DH++;
                }else if($elem[2] == 3 || $elem[1] == 3){
					//Aumentamos numero integrante Division de computo
                    $CO++;
                }else if($elem[2] == 4 || $elem[1] == 4){
					//Aumentamos numero integrante Division de disciplina
                    $DI++;
                }else if($elem[2] == 5 || $elem[1] == 5){
					//Aumentamos numero integrante externo
                    $Otros++;
                }
            }
		}
		
		$preguntas = 0;
		$positivas = 0;
		$respuestasContenido = 0;
		$respuestasCoordinacion = 0;
		$respuestasInstructores1 = 0;
		$respuestasInstructores2 = 0;
		$respuestasInstructores3 = 0;
		$alumnos = 0;
		$alumnos_eval_instructor1 = 0;
		$alumnos_eval_instructor2 = 0;
		$alumnos_eval_instructor3 = 0;
		$promedios1 = array();
		$promedios2 = array();
		$promedios3 = array();
		$respuesta_individual1 = 0;
		$respuesta_individual2 = 0;
        $respuesta_individual3 = 0;
        $preguntas_contenido = 0;
        $preguntas_coordinacion = 0;

		//Bucle necesario para obtener el numero de preguntas positivas, evaluaciones de cada uno de los instructores y los factores de calidad de contenido, de calidad de la coordinacion, y los factores de calidad de los instructores
		foreach($evals as $evaluacion){
			//Aumentamos el numero de alumnos que respondieron el cuestionario
			$alumnos++;
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

			//Las preguntas correspondientes al primer instructor
			if($evaluacion->p4_1 >= 50){
				$alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_1;
				$respuesta_individual1+= $evaluacion->p4_1;
				if($evaluacion->p4_1 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_2 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_2;
				$respuesta_individual1+= $evaluacion->p4_2;
				if($evaluacion->p4_2 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_3 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_3;
				$respuesta_individual1+= $evaluacion->p4_3;
				if($evaluacion->p4_3 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_4 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_4;
				$respuesta_individual1+= $evaluacion->p4_4;
				if($evaluacion->p4_4 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_5 >= 50){
                $preguntas++;
                $alumnos_eval_instructor1++;
				$respuestasInstructores1+= $evaluacion->p4_5;
				$respuesta_individual1+= $evaluacion->p4_5;
				if($evaluacion->p4_5 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_6 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_6;
				$respuesta_individual1+= $evaluacion->p4_6;
				if($evaluacion->p4_6 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_7 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_7;
				$respuesta_individual1+= $evaluacion->p4_7;
				if($evaluacion->p4_7 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_8 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_8;
				$respuesta_individual1+= $evaluacion->p4_8;
				if($evaluacion->p4_8 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_9 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_9;
				$respuesta_individual1+= $evaluacion->p4_9;
				if($evaluacion->p4_9 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p4_10 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_10;
				$respuesta_individual1+= $evaluacion->p4_10;
				if($evaluacion->p4_10 >= 80){
					$positivas++;
				}
			}
			//Queremos obtener todas las evaluaciones para luego comparar promedio, minimo y maximo del instructor
			if($evaluacion->p4_11 >= 50){
                $alumnos_eval_instructor1++;
				$preguntas++;
				$respuestasInstructores1+= $evaluacion->p4_11;
				$respuesta_individual1+= $evaluacion->p4_11;
				array_push($promedios1, round($respuesta_individual1/11,2));
				$respuesta_individual1 = 0;
				if($evaluacion->p4_11 >= 80){
					$positivas++;
				}
			}

			//Las preguntas correspondientes al segundo instructor
			if($evaluacion->p5_1 >= 50){
				$alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_1;
				$respuesta_individual2+= $evaluacion->p5_1;
				if($evaluacion->p5_1 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_2 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_2;
				$respuesta_individual2+= $evaluacion->p5_2;
				if($evaluacion->p5_2 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_3 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_3;
				$respuesta_individual2+= $evaluacion->p5_3;
				if($evaluacion->p5_3 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_4 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_4;
				$respuesta_individual2+= $evaluacion->p5_4;
				if($evaluacion->p5_4 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_5 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_5;
				$respuesta_individual2+= $evaluacion->p5_5;
				if($evaluacion->p5_5 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_6 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_6;
				$respuesta_individual2+= $evaluacion->p5_6;
				if($evaluacion->p5_6 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_7 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_7;
				$respuesta_individual2+= $evaluacion->p5_7;
				if($evaluacion->p5_7 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_8 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_8;
				$respuesta_individual2+= $evaluacion->p5_8;
				if($evaluacion->p5_8 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_9 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_9;
				$respuesta_individual2+= $evaluacion->p5_9;
				if($evaluacion->p5_9 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p5_10 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_10;
				$respuesta_individual2+= $evaluacion->p5_10;
				if($evaluacion->p5_10 >= 80){
					$positivas++;
				}
			}
			//Queremos obtener todas las evaluaciones para luego comparar promedio, minimo y maximo del instructor
			if($evaluacion->p5_11 >= 50){
                $alumnos_eval_instructor2++;
				$preguntas++;
				$respuestasInstructores2+= $evaluacion->p5_11;
				$respuesta_individual2+= $evaluacion->p5_11;
				array_push($promedios2, round($respuesta_individual2/11,2));
				$respuesta_individual2 = 0;
				if($evaluacion->p5_11 >= 80){
					$positivas++;
				}
			}
			
			//Las preguntas correspondientes al tercer instructor
			if($evaluacion->p6_1 >= 50){
				$alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_1;
				$respuesta_individual3+= $evaluacion->p6_1;
				if($evaluacion->p6_1 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_2 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_2;
				$respuesta_individual3+= $evaluacion->p6_2;
				if($evaluacion->p6_2 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_3 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_3;
				$respuesta_individual3+= $evaluacion->p6_3;
				if($evaluacion->p6_3 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_4 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_4;
				$respuesta_individual3+= $evaluacion->p6_4;
				if($evaluacion->p6_4 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_5 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_5;
				$respuesta_individual3+= $evaluacion->p6_5;
				if($evaluacion->p6_5 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_6 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_6;
				$respuesta_individual3+= $evaluacion->p6_6;
				if($evaluacion->p6_6 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_7 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_7;
				$respuesta_individual3+= $evaluacion->p6_7;
				if($evaluacion->p6_7 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_8 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_8;
				$respuesta_individual3+= $evaluacion->p6_8;
				if($evaluacion->p6_8 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_9 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_9;
				$respuesta_individual3+= $evaluacion->p6_9;
				if($evaluacion->p6_9 >= 80){
					$positivas++;
				}
			}
			if($evaluacion->p6_10 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_10;
				$respuesta_individual3+= $evaluacion->p6_10;
				if($evaluacion->p6_10 >= 80){
					$positivas++;
				}
			}

			//Queremos obtener todas las evaluaciones para luego comparar promedio, minimo y maximo del instructor
			if($evaluacion->p6_11 >= 50){
                $alumnos_eval_instructor3++;
				$preguntas++;
				$respuestasInstructores3+= $evaluacion->p6_11;
				$respuesta_individual3+= $evaluacion->p6_11;
				array_push($promedios3, round($respuesta_individual3/11,2));
				$respuesta_individual3 = 0;
				if($evaluacion->p6_11 >= 80){
					$positivas++;
				}
			}

		}

		//Obtenemos la evaluacion minima y maxima del primer instructor
		$minimo1 = 0;
		$maximo1 = 0;

		foreach($promedios1 as $promedio){
			if($minimo1 == 0){
				$minimo1 = $promedio;
			}
			if($promedio < $minimo1){
				$minimo1 = $promedio;
			}
			if($promedio > $maximo1){
				$maximo1 = $promedio;
			}
		}

		//Obtenemos la evaluacion minima y maxima del segundo instructor
		$minimo2 = 0;
		$maximo2 = 0;

		foreach($promedios2 as $promedio){
			if($minimo2 == 0){
				$minimo2 = $promedio;
			}
			if($promedio < $minimo2){
				$minimo2 = $promedio;
			}
			if($promedio > $maximo2){
				$maximo2 = $promedio;
			}
		}

		//Obtenemos la evaluacion minima y maxima del tercer instructor
		$minimo3 = 0;
		$maximo3 = 0;

		foreach($promedios3 as $promedio){
			if($minimo3 == 0){
				$minimo3 = $promedio;
			}
			if($promedio < $minimo3){
				$minimo3 = $promedio;
			}
			if($promedio > $maximo3){
				$maximo3 = $promedio;
			}
		}

		//Checamos el numero de instructores del curso para ver a cual de los view enviar
        $envio = 0;
        $envioPDF = 0;
        $nombre = 0;

        if($minimo3 != 0){
            $envio = 'pages.reporte_final_curso3';
            $envioPDF = 'pages.validacion_3';
        }else if($minimo2 != 0){
            $envio = 'pages.reporte_final_curso2';
            $envioPDF = 'pages.validacion_2';
        }else{
            $envio = 'pages.reporte_final_curso1';
            $envioPDF = 'pages.validacion_1';
        }

		if(strcmp($catalogoCurso[0]->tipo,'S')==0){
            $nombre = 'seminario';
			if($minimo3 != 0){
                //$envio = 'pages.reporte_final_seminario_instructores_3';
                $envioPDF = 'pages.validacion_seminario_3';
			}else if($minimo2 != 0){
                //$envio = 'pages.reporte_final_seminario_instructores_2';
                $envioPDF = 'pages.validacion_seminario_2';
			}else{
                //$envio = 'pages.reporte_final_seminario_instructores_1';
                $envioPDF = 'pages.validacion_seminario_1';
			}
		}else{
            $nombre = 'curso';
			if($minimo3 != 0){
                //$envio = 'pages.reporte_final_curso3';
                $envioPDF = 'pages.validacion_3';
			}else if($minimo2 != 0){
                //$envio = 'pages.reporte_final_curso2';
                $envioPDF = 'pages.validacion_2';
			}else{
                //$envio = 'pages.reporte_final_curso1';
                $envioPDF = 'pages.validacion_1';
			}
		}

		//En caso de no haber alumnos ni preguntas (se pide el resumen de un curso no evaluado anteriormente) pasamos su valor a 1 para evitar division by zero exception
		if($alumnos == 0){
			$alumnos = 1;
		}
		
		if($preguntas == 0){
			$preguntas = 1;
		}

		$factor_instructor1 = 0;

		//Si hay un instructor obtenemos su factor
		if($alumnos_eval_instructor1 != 0){
			$factor_instructor1 = round($respuestasInstructores1 / ($alumnos_eval_instructor1),2);
		}

		$factor_instructor2 = 0;

		//Si hay dos instructores obtenemos su factor
		if($alumnos_eval_instructor2 != 0){
			$factor_instructor2 = round($respuestasInstructores2 / ($alumnos_eval_instructor2),2);
		}

		$factor_instructor3 = 0;

		//Si hay tres instructores obtenemos su factor
		if($alumnos_eval_instructor3 != 0){
			$factor_instructor3 = round($respuestasInstructores3 / ($alumnos_eval_instructor3),2);
		}

		//Obtenemos los factores de respuestas positivas, contenido y coordinacion
		$factor_respuestas_positivas = round($positivas*100 / $preguntas, 2);
		$factor_contenido = round($respuestasContenido / ($preguntas_contenido),2);
		$factor_coordinacion = round($respuestasCoordinacion / ($preguntas_coordinacion),2);

		//Obtenemos el numero de horas a partir del numero de sesiones y las horas de cada sesion
		$horas_inicio = explode(':',$curso[0]->hora_inicio);
		$horas_fin = explode(':',$curso[0]->hora_fin);

        $inicio = intval($horas_inicio[0]) + floatval($horas_inicio[1]/100);
        $fin = intval($horas_fin[0]) + floatval($horas_fin[1]/100);

        $numero_horas = floatval($curso[0]->numero_sesiones) * ($fin-$inicio);

        $catalogo_curso = DB::table('catalogo_cursos')
            ->where('id',$curso[0]->catalogo_id)
            ->get();

        $nombre = $nombre.'_'.$catalogo_curso[0]->nombre_curso.'_'.$curso[0]->semestre_anio.'_'.$curso[0]->semestre_pi.'_'.$curso[0]->semestre_si.'.pdf';
        $pdf = PDF::loadView($envioPDF,array('evals'=>$evals,'curso_id'=>$curso_id,'catalogoCurso_id'=>$catalogoCurso_id,'participantes'=>$participantes,'factor_acreditacion'=>$factor_acreditacion,'factor'=>$factor,'alumnos'=>$alumnos,'DP'=>$DP,'DH'=>$DH,'CO'=>$CO,'DI'=>$DI,'Otros'=>$Otros,'ocupacion'=>$ocupacion,'positivas'=>$factor_respuestas_positivas,'contenido'=>$factor_contenido,'factor_coordinacion'=>$factor_coordinacion,'curso'=>$curso[0],'salon'=>$salon[0],'acreditaron'=>$acreditado,'instructor'=>$factor_instructor1,'minimo'=>$minimo1,'maximo'=>$maximo1,'instructor2'=>$factor_instructor2,'minimo2'=>$minimo2,'maximo2'=>$maximo2,'instructor3'=>$factor_instructor3,'minimo3'=>$minimo3,'maximo3'=>$maximo3,'numero_horas'=>$numero_horas,'asistieron'=>$asistieron,'nombreInstructor'=>$nombreInstructor,'catalogo'=>$catalogo_curso[0],'contestaron'=>$contestaron));	
        return $pdf->download($nombre);

    }

    public function modificarEvaluacion(Request $request, int $curso_id, int $profesor_id){
        $profesor = Profesor::find($profesor_id);

        $participante_id = DB::table('participante_curso')
			->select('id','curso_id')
			->where([['curso_id','=',$curso_id],['profesor_id','=',$profesor_id]])->get();

		$evaluacion_final_curso;
		if(CatalogoCurso::find(Curso::find($participante_id[0]->curso_id)->catalogo_id)->tipo == 'S'){
			$evaluacion_final_curso = EvaluacionFinalSeminario::where('participante_curso_id',$participante_id[0]->id)->get();
		}else{
			$evaluacion_final_curso = EvaluacionFinalCurso::where('participante_curso_id',$participante_id[0]->id)->get();
		}

        if(sizeof($evaluacion_final_curso) == 0 && Session::has('message') == false){
            Session::flash('message','El curso no ha sido evaluado, favor de evaluarlo.');
			Session::flash('alert-class', 'alert-danger'); 
			return redirect()->back()->withInput($request->input());
        }else if(sizeof($evaluacion_final_curso) == 0 && Session::has('message')){
            return redirect()->route('cd.evaluacion.vista',[$curso_id, $profesor_id])->withInput($request->input());
        }
            

		$catalogoCurso = CatalogoCurso::find(Curso::find($participante_id[0]->curso_id)->catalogo_id);
        $curso = Curso::find($curso_id);
        $count = DB::table('profesor_curso')
			->where('curso_id',$curso_id)
			->count();

        if(strcmp($catalogoCurso->tipo,"S") == 0){
            if($count==1){
                return view("pages.final_seminario_1_modificar")
					->with("profesor",$profesor)
                    ->with("curso",$curso)
                    ->with('catalogoCurso',$catalogoCurso)
                    ->with('evaluacion',$evaluacion_final_curso[0]);
			}elseif($count==2){
                return view("pages.final_seminario_2_modificar")
					->with("profesor",$profesor)
                    ->with("curso",$curso)
                    ->with('catalogoCurso',$catalogoCurso)
                    ->with('evaluacion',$evaluacion_final_curso[0]);
			}elseif($count==3){
                return view("pages.final_seminario_3_modificar")
                    ->with("profesor",$profesor)
                    ->with("curso",$curso)
                    ->with('catalogoCurso',$catalogoCurso)
                    ->with('evaluacion',$evaluacion_final_curso[0]);
			}
        }else{
			if($count==1){
				return view("pages.final_curso_1_modificar")
					->with("profesor",$profesor)
					->with("curso",$curso)
					->with('catalogoCurso',$catalogoCurso)
                    ->with('evaluacion',$evaluacion_final_curso[0]);
			}elseif($count==2){
				return view("pages.final_curso_2_modificar")
					->with("profesor",$profesor)
					->with("curso",$curso)
					->with('catalogoCurso',$catalogoCurso)
                    ->with('evaluacion',$evaluacion_final_curso[0]);
			}elseif($count==3){
				return view("pages.final_curso_3_modificar")
					->with("profesor",$profesor)
					->with("curso",$curso)
					->with('catalogoCurso',$catalogoCurso)
                    ->with('evaluacion',$evaluacion_final_curso[0]);
			}
        
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

    public function reporteFinalInstructor($curso_id){
		//Si el formulario no fue rellenado por un profesor, no hace falta enviar el correo
		if (Session::has('coordinador_id') or Session::has('superadmin'))
			return;

		//Obtenemos el curso evaluado
		$curso = DB::table('cursos')
			->where('id',$curso_id)
			->get();
		//Obtenemos el catálogo del curso evaluado
		$catalogoCurso = DB::table('catalogo_cursos')
			->where('id',$curso[0]->catalogo_id)
			->get();
        $evals = 0;
		//Obtenemos todas las evaluaciones del curso
        if(strcmp($catalogoCurso[0]->tipo,'S')==0){
		    $evals = DB::table('_evaluacion_final_seminario as e')
            ->join('participante_curso as p','p.id','=','e.participante_curso_id')
			->where('p.curso_id',$curso_id)
			->get();
        } else {
            $evals = DB::table('_evaluacion_final_curso as e')
            ->join('participante_curso as p','p.id','=','e.participante_curso_id')
			->where('p.curso_id',$curso_id)
			->get();
        }


        if(sizeof($evals) == 0){
            Session::flash('message','Curso no cuenta con evaluación');
            Session::flash('alert-class', 'alert-danger'); 
    
            return redirect()->back();
        }
	
		//Obtenemos los docentes/facilitadores de los cursos y su número
		$profesorsDatos = DB::table('profesor_curso')
			->where('curso_id',$curso[0]->id)
			->get();

		$count = ProfesoresCurso::select($curso_id)
			->where('curso_id',$curso_id)
			->count();
	
		$profesors = array();
	
		//Obtenemos los datos de los docentes
		foreach($profesorsDatos as $Dato){
			$profesor = Profesor::find($Dato->id);
			array_push($profesors,$profesor);
		}

		//Empezamps la evaluación del curso
		$mejor = array(); //mejor
		$sugerencias = array(); //sug
		$lugar = 'pages.reporte_final_instructores_1';
        $nombre = 'reporte_instructores_'.$catalogoCurso[0]->nombre_curso.'.pdf';
		$experiencia1 = 0; //4_1
		$planeacion1 = 0;	//4_2
		$puntualidad1 = 0;	//4_3
		$materiales1 = 0;	//4_4
		$dudas1 = 0;		//4_5
		$control1 = 0;		//4_6
		$interes1 = 0;		//4_6
		$actitud1 = 0;		//4_8
		$experiencia2 = 0;
		$planeacion2 = 0;
		$puntualidad2 = 0;
		$materiales2 = 0;
		$dudas2 = 0;
		$control2 = 0;
		$interes2 = 0;
		$actitud2 = 0;
		$experiencia3 = 0;
		$planeacion3 = 0;
		$puntualidad3 = 0;
		$materiales3 = 0;
		$dudas3 = 0;
		$control3 = 0;
		$interes3 = 0;
		$actitud3 = 0;

		//Iteramos todas las evaluaciones para ir sumando los valores de las evaluaciones
		foreach($evals as $eval){

			$experiencia1 += $eval->p4_1; //4_1
			$planeacion1 += $eval->p4_2;	//4_2
			$puntualidad1 += $eval->p4_3;	//4_3
			$materiales1 += $eval->p4_4;	//4_4
			$dudas1 += $eval->p4_5;		//4_5
			$control1 += $eval->p4_6;		//4_6
			$interes1 += $eval->p4_7;		//4_7
			$actitud1 += $eval->p4_8;		//4_8
	
			//Si hay dos profesores obtenemos la evaluación del segundo docente
			if($count>=2){
				$lugar = 'pages.reporte_final_instructores_2';
				$experiencia2 += $eval->p5_1;
				$planeacion2 += $eval->p5_2;
				$puntualidad2 += $eval->p5_3;
				$materiales2 += $eval->p5_4;
				$dudas2 += $eval->p5_5;
				$control2 += $eval->p5_6;
				$interes2 += $eval->p5_7;
				$actitud2 += $eval->p5_8;
			}

			//Si hay tres docentes obtenemos la evaluación del tercero
			if($count == 3){
				$lugar = 'pages.reporte_final_instructores_3';
				$experiencia3 += $eval->p6_1;
				$planeacion3 += $eval->p6_2;
				$puntualidad3 += $eval->p6_3;
				$materiales3 += $eval->p6_4;
				$dudas3 += $eval->p6_5;
				$control3 += $eval->p6_6;
				$interes3 += $eval->p6_7;
				$actitud3 += $eval->p6_8;
			}

			array_push($mejor,$eval->mejor);
			array_push($sugerencias,$eval->sug);

		}


		//Obtenemos los promedios de cada profesor
		$experiencia1 = round($experiencia1/sizeof($evals),2);
		$planeacion1 = round($planeacion1/sizeof($evals),2);	//4_2
		$puntualidad1 = round($puntualidad1/sizeof($evals),2);	//4_3
		$materiales1 = round($materiales1/sizeof($evals),2);	//4_4
		$dudas1 = round($dudas1/sizeof($evals),2);		//4_5
		$control1 = round($control1/sizeof($evals),2);		//4_6
		$interes1 = round($interes1/sizeof($evals),2);		//4_7
		$actitud1 = round($actitud1/sizeof($evals),2);	

		$experiencia2 = round($experiencia2/sizeof($evals),2);
		$planeacion2 = round($planeacion2/sizeof($evals),2);	//4_2
		$puntualidad2 = round($puntualidad2/sizeof($evals),2);	//4_3
		$materiales2 = round($materiales2/sizeof($evals),2);	//4_4
		$dudas2 = round($dudas2/sizeof($evals),2);		//4_5
		$control2 = round($control2/sizeof($evals),2);		//4_6
		$interes2 = round($interes2/sizeof($evals),2);		//4_7
		$actitud2 = round($actitud2/sizeof($evals),2);	
		
		$experiencia3 = round($experiencia3/sizeof($evals),2);
		$planeacion3 = round($planeacion3/sizeof($evals),2);	//4_2
		$puntualidad3 = round($puntualidad3/sizeof($evals),2);	//4_3
		$materiales3 = round($materiales3/sizeof($evals),2);	//4_4
		$dudas3 = round($dudas3/sizeof($evals),2);		//4_5
		$control3 = round($control3/sizeof($evals),2);		//4_6
		$interes3 = round($interes3/sizeof($evals),2);		//4_7
		$actitud3 = round($actitud3/sizeof($evals),2);	
		
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
		$pdf = PDF::loadView($lugar,array('experiencia1'=>$experiencia1,'planeacion1'=>$planeacion1,'puntualidad1'=>$puntualidad1,'materiales1'=>$materiales1,'dudas1'=>$dudas1,'control1'=>$control1,'interes1'=>$interes1,'actitud1'=>$actitud1,'experiencia2'=>$experiencia2,'planeacion2'=>$planeacion2,'puntualidad2'=>$puntualidad2,'materiales2'=>$materiales2,'dudas2'=>$dudas2,'control2'=>$control2,'interes2'=>$interes2,'actitud2'=>$actitud2,'experiencia3'=>$experiencia3,'planeacion3'=>$planeacion3,'puntualidad3'=>$puntualidad3,'materiales3'=>$materiales3,'dudas3'=>$dudas3,'control3'=>$control3,'interes3'=>$interes3,'actitud3'=>$actitud3,'mejor'=>$mejor,'sugerencias'=>$sugerencias,'catalogo'=>$catalogoCurso[0],'curso'=>$curso[0],'cursos'=>$curso[0],'profesors'=>$profesors,'date'=>$date,'dia'=>$dia, 'mes'=>$mes));	

        return $pdf->download($nombre);

    }

    public function asistentesGlobal(String $semestreEnv){

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
            Session::flash('message','No hay cursos dados de alta en el periodo '.$semestreEnv);
			Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }
        
        $asistentes = array();
        foreach($cursos as $curso){
            $unam = 0;
            $externos = 0;
            $profesors = DB::table('participante_curso')
            ->join('profesors as p','p.id','=','participante_curso.profesor_id')
            ->select('p.unam','p.procedencia')
            ->where([['participante_curso.curso_id',$curso->id]])
            ->get();
            foreach($profesors as $profesor){
                if($profesor->unam == 1){
                    $unam++;
                }else{
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
            ->select('p.unam','p.procedencia')
            ->where([['participante_curso.curso_id',$curso->id]])
            ->get();
            foreach($profesors as $profesor){
                if($profesor->unam == 1){
                    $unam++;
                }else{
                    $externos++;
                }
            }
            $total = $unam+$externos;
            array_push($asistentes, [$curso, $unam, $externos, $total]);
        }
        
        $pdf = PDF::loadView('pages.participantes',array('semestre'=>$semestreEnv,'cursos'=>$asistentes));	

        $download='participantes_'.$coordinacion[0]->abreviatura.'-'.$semestre[0].'-'.$semestre[1].'pdf';
        //Retornamos la descarga del pdf
        return $pdf->download($download);
    }

    public function criterioAceptacion(String $semestreEnv){
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
            if(strcmp($curso->tipo,'S')==0)
                $criterio=DB::table('_evaluacion_final_seminario as e')
                    ->join('participante_curso as p','p.id','=','e.participante_curso_id')
                    ->join('cursos as c','p.curso_id','=','c.id')
                    ->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
                    ->join('coordinacions as co','co.id','=','cc.coordinacion_id')
                    ->select('e.p7','co.abreviatura')
                    ->where('c.id',$curso->id)
                    ->get();
            else
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
            $aux1['Promedio: '] = $promedio1;
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
            $aux2['Promedio: '] = $promedio2;
        }

        if($aux1_empty && $aux2_empty){
            Session::flash('message','El periodo '.$semestreEnv.' no ha sido evaluado');
			Session::flash('alert-class', 'alert-danger'); 
            return redirect()->back();
        }

        $pdf = PDF::loadView('pages.criterio_aceptacion',array('semestre'=>$semestreEnv,'criterio_s'=>$aux1,'criterio_i'=>$aux2,'criterio_s_empty'=>$aux1_empty,'criterio_i_empty'=>$aux2_empty));	

        $download='criterio_aceptacion'.$semestre[0].'-'.$semestre[1].'.pdf';
        //Retornamos la descarga del pdf
        return $pdf->download($download);
    }

}   