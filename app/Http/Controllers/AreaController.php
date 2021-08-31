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

class AreaController extends Controller
{
    /**
     * Función que retorna a la vista de super usuario
     * @return Vista super usuario
     */
    public function index(){

        $coordinacion_nombre = 'Formación de Desarrollo Humano';

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


        $fecha="2020-1";
        $semestre=explode('-',$fecha);
        $periodo="s";
        $coordinacion_nombre = 'Formación de Desarrollo Humano';

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

        $id = DB::table('coordinacions')
            ->where([['nombre_coordinacion',$coordinacion_nombre]])
            ->get();

        Session::put('sesion','area');
        Session::put('url','area');

		if(Session::has('message')){
            Session::flash('message','Sucedió un error al contestar el formulario. Favor de llenar todas las preguntas o revisar que el usuario en cuestión no lo haya contestado');
			Session::flash('alert-class', 'alert-danger');
        }

        return view('pages.homeArea')
            ->with('datos',$datos)
            ->with('semestre_anio',$reversed)
            ->with('coordinacion',$coordinacion_nombre)
            ->with('coordinacion_id',$id[0]->id);

    }

    public function cambioFecha(Request $request){

        $fecha=$request->get('semestre');
        $semestre=explode('-',$fecha);
        $periodo=$request->get('periodo');
        $coordinacion_nombre = 'Formación de Desarrollo Humano';

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
		$busqueda = $request->get('pattern');
		$tipo = $request->get('type');

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
			$nombres = explode(" ", $busqueda);
            if(sizeof($nombres) < 3){
                //En caso de que no se haya evaluado correctamente el curso regresamos a la vista anterior indicando que la evaluación fue errónea
			    Session::flash('message','Sucedió un error al contestar el formulario. Favor de llenar todas las preguntas o revisar que el usuario en cuestión no lo haya contestado');
			    Session::flash('alert-class', 'alert-danger'); 

			    return $this->index();
            }
			if(sizeof($nombres) == 3){
				$cursos = DB::table('cursos as c')
				->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
				->join('coordinacions as co','co.id','=','cc.coordinacion_id')
				->join('profesor_curso as pc','pc.curso_id','=','c.id')
				->join('profesors as p','p.id','=','pc.profesor_id')
				->where([['p.nombres','like','%'.$nombres[0].'%'],['p.apellido_paterno','like','%'.$nombres[1].'%'],['p.apellido_materno','like','%'.$nombres[2].'%'],['co.id','=',$coordinacion_id]])
				->get();
			}if(sizeof($nombres) == 4){
				$cursos = DB::table('cursos as c')
				->join('catalogo_cursos as cc','c.catalogo_id','=','cc.id')
				->join('coordinacions as co','co.id','=','cc.coordinacion_id')
				->join('profesor_curso as pc','pc.curso_id','=','c.id')
				->join('profesors as p','p.id','=','pc.profesor_id')
				->where([['p.nombres','like','%'.$nombres[0].'%'],['p.apellido_paterno','like','%'.$nombres[2].'%'],['p.apellido_materno','like','%'.$nombres[3].'%'],['co.id','=',$coordinacion_id]])
				->get();
			}

            foreach($cursos as $curso){
                $tupla = array();
                $profesores = DB::table('profesor_curso')
                    ->join('profesors','profesors.id','=','profesor_curso.profesor_id')
                    ->select('profesors.nombres','profesors.apellido_paterno','profesors.apellido_materno')
                    ->where('profesor_curso.curso_id','=',$curso->curso_id)
                    ->get();
                array_push($tupla, $curso);
                array_push($tupla, $profesores);
                array_push($datos, $tupla);
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

    public function participantes($curso_id){
        $participantes = DB::table('participante_curso')
            ->where([['curso_id',$curso_id]])
            ->get();
        $curso = Curso::find($curso_id);
        $users = array();
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

    public function evaluacion(int $id){

        $datos = DB::table('cursos')
            ->join('participante_curso','cursos.id','=','participante_curso.curso_id')
            ->join('catalogo_cursos','cursos.catalogo_id','=','catalogo_cursos.id')
            ->join('profesors','participante_curso.profesor_id','=','profesors.id')
            ->select('catalogo_cursos.nombre_curso','profesors.id','profesors.nombres','profesors.apellido_paterno','profesors.apellido_materno')
            ->where([['cursos.id',$id]])
            ->get();

        return view('pages.eval')
            ->with('datos',$datos)
            ->with('id',$id);
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
				->select('_evaluacion_final_seminario.participante_curso_id')
				->where([['participante_curso_id',$participante_curo[0]->id],['curso_id',$curso_id]])
				->get();
		}
		else{
			$evaluacion_final_curso = DB::table('_evaluacion_final_curso')
			->select('_evaluacion_final_curso.participante_curso_id','_evaluacion_final_curso.curso_id')
			->where([['curso_id',$curso_id],['participante_curso_id',$participante_curo[0]->id]])
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
        $eval_fcurso = new EvaluacionFinalCurso;
		$participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
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

	 
        return redirect()->route('area.evaluacion',[$curso_id]);
    }

    public function saveFinal_Seminario(Request $request,$profesor_id,$curso_id, $catalogoCurso_id){
        $eval_fseminario = new EvaluacionFinalSeminario;
          $promedio_p1 = new EvaluacionFinalSeminario;
		  
          $correo = new EvaluacionController(); 
		  $participante = ParticipantesCurso::where('profesor_id',$profesor_id)->where('curso_id',$curso_id)->get();
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

	
        return redirect()->route('area.evaluacion',[$curso_id]);
    }


}
