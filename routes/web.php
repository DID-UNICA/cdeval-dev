<?php
Route::get('/', function () {

    //return view('layouts.principal');
    return view('welcome');
});


Route::get('/area/{coordinacion_id}/{message}',['uses'=>'CoordinadorController@area_pdf','as'=>'coordinacion.pdf']);


Route::post('/autentificar', "AutentificarController@index")->name("autentificar");

//Vistas home
Route::get('/home/{profesor_id}', "ProfesorController@index")->name("home.profesor");
Route::get('/home/{coordinador_id}', "CoordinadorController@index")->name("home.coordinador");
Route::get('/home/root', "RootController@index")->name("home.root");

//Vista de coordinador

//Route::post('/coordinador', "AutentificarController@index")->name("coordinador");
Route::get('/cursos',"CoordinadorController@cursos")->name("cursos");
//Route::get('/cursosCoordinacion/{id}/{message}',"CoordinadorController@cursosCoordinaciones")->name("cursos.coordinacion");
Route::get('/cursosCoordinacion/{id}/{message}/',"CoordinadorController@cursosCoordinaciones")->name("cursos.coordinacion");
Route::get('/instructores',"CoordinadorController@instructores")->name("instructores");
Route::get('cursos/buscar/{id}/{message}/',"CoordinadorController@searchCursos")->name("buscar.curso");
Route::get('sesion',"CoordinadorController@sesiones")->name("ver.sesion");
Route::get('global',"CoordinadorController@globales")->name("ver.global");
Route::get('global/{curso_id}/{pdf}/{encargado_id}',"CoordinadorController@globalFinal")->name("ver.global.final");
Route::get('global/sesion/{curso_id}/{pdf}/{encargado_id}',"CoordinadorController@globalSesion")->name("ver.sesion.final");

//Para enviar correos
Route::get('evaluarCurso/{profesor_id}/{curso_id}','EvaluacionController@enviarCorreo')->name('evaluacion.correo');
//Guardar evaluaciones en la BD
Route::get('evaluar/{profesor_id}/{curso_id}/{catalogoCurso_id}','EvaluacionController@index')->name('evaluacion.index');
Route::get('evaluarSesion/{profesor_id}/{curso_id}/{catalogoCurso_id}/{count}','EvaluacionController@evaluacionPorSesion')->name('evaluacion.porSesion');
Route::get('evaluarCurso/{profesor_id}/{curso_id}/{catalogoCurso_id}/{count}','EvaluacionController@evaluacionPorCurso')->name('evaluacion.porCurso');

//Eran post
Route::post('evaluar/finalc/{profesor_id}/{curso_id}/{catalogoCurso_id}',"EvaluacionController@saveFinal_Curso")->name('final.curso');
Route::post('/finals/{profesor_id}/{curso_id}/{catalogoCurso_id}','EvaluacionController@saveFinal_Seminario')->name('final.seminario');
Route::post('evaluar/xcurso/{profesor_id}/{curso_id}/{catalogoCurso_id}',"EvaluacionController@saveXCurso")->name('x.curso');
Route::post('evaluar/xseminario/{profesor_id}/{curso_id}/{catalogoCurso_id}',"EvaluacionController@saveXSeminario")->name('x.seminario');

Route::get('enviar/{profesor_id}',"EvaluacionController@enviarClaveCursoHistorico")->name('evaluacion.enviarClaveCursoHistorico');
Route::get('enviarFecha/{profesor_id}',"EvaluacionController@redirigirAEnviar")->name('evaluacion.enviarClaveFecha');
Route::post('enviarFechaArchivo/{profesor}',"EvaluacionController@enviarClaveFecha")->name('evaluacion.enviarClaveFechaArchivo');
Route::get('admin/{profesor_id}',"EvaluacionController@admin")->name('evaluacion.admin');

Route::post('/area/pdf/','CoordinadorController@enviarArea')->name('enviar.area.pdf');
/*Route::post('/area/pdf/{$coordinacion_id}',function($coordinacion_id){
    return 'Hola '.$coordinacion_id;
})->name('enviar.area');*/

Route::get('fecha_global/{message}/', "CoordinadorController@elegirFecha")->name('elegir.fecha');
Route::get('fecha_coordinacion/{message}/', "CoordinadorController@elegirFechaCoordinacion")->name('elegir.coordinacion');

Route::get('admin/','CoordinadorController@index')->name('superadmin');

Route::post('enviar_global',"CoordinadorController@enviarGlobal")->name('enviar.global');
Route::post('enviar_coordinacion',"CoordinadorController@enviarCoordinacion")->name('enviar.coordinacion');
Route::get('descargar/global/{fecha}/{semestral}','CoordinadorController@globalPDF')->name('global.pdf');
Route::get('descargar/area/{fecha}/{nombreCoordinacion}/{semestral}','CoordinadorController@areaPDF')->name('area.pdf');

Route::get('area',function(){
    return view('pages.area');
})->name('area');

Route::get('global',function(){
    return view('pages.global');
})->name('global');

Route::get('instructores',function(){
    return view('pages.reporte_instructores');
})->name('instructores');

Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('coordinador/{coordinacion_id}','CoordinadorController@superadmin')->name('superadminCoordinacion');
Route::get('coordinador/realizarEvaluacion/{encargado_id}/{curso_id}',"CoordinadorController@realizarEvaluaciones")->name("realizar.evaluaciones");
