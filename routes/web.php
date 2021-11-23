<?php
use App\Http\Controllers\CoordinadorGeneralController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/coordinador/login', 'Auth\CoordinacionLoginController@showLoginForm')->name('coordinador.login');
Route::post('/coordinador/login', 'Auth\CoordinacionLoginController@login')->name('coordinador.login.post');
Route::get('/coordinador/logout', 'Auth\CoordinacionLoginController@logout')->name('coordinador.logout');

Route::group(['middleware'=>'coordinador'], function() {
  Route::get('/home',[HomeController::class,'index'])->name('home.index');
});


Route::get('/admin', [CoordinadorGeneralController::class, 'index'])->name('admin.index');

// Rutas anteriores
Route::get('/', function() { return redirect()->route('coordinador.login');});
// Route::get('/',[CoordinadorGeneralController::class,'index'])->name('cd.index');

Route::get('/CD',[CoordinadorGeneralController::class,'index'])->name('cd.index');
Route::get('/CD/area/{semestre}/{periodo}/',[CoordinadorGeneralController::class,'global'])->name('cd.global');
Route::get('/CD/participantes/{semestre}/',[CoordinadorGeneralController::class,'asistentesGlobal'])->name('cd.participantes');
Route::get('/CD/criterio/{semestre}/',[CoordinadorGeneralController::class,'criterioAceptacion'])->name('cd.criterio');
Route::get('/CD/participantes/area/{semestre}/{division}',[CoordinadorGeneralController::class,'asistentesArea'])->name('cd.participantes.area');
Route::get('/CD/participantes/curso/{curso_id}',[CoordinadorGeneralController::class,'participantes'])->name('cd.participantes.curso');
Route::get('/CD/area/{semestre}/{periodo}/{division}',[CoordinadorGeneralController::class,'area'])->name('cd.area');
Route::post('CD/area/buscar/curso/{id}/{semestreEnv}/{periodo}',[CoordinadorGeneralController::class,'buscarCurso'])->name('cd.buscar.curso');
Route::get('/CD/evaluacion/{id}',[CoordinadorGeneralController::class,'evaluacion'])->name('cd.evaluacion');
Route::get('CD/evaluacion/final/{participante_id}',[CoordinadorGeneralController::class,'evaluacionVista'])->name('cd.evaluacion.vista');
Route::get('CD/modificar/final/{participante_id}',[CoordinadorGeneralController::class,'modificarEvaluacion'])->name('cd.modificar.evaluacion');
Route::get('/CD/participantes/{curso_id}',[CoordinadorGeneralController::class,'participantes'])->name('cd.participantes');
Route::get('descargar/global/{fecha}/{semestral}',[CoordinadorGeneralController::class,'globalPDF'])->name('cd.global_pdf');
Route::get('/CD/global/{semestre}/{periodo}/{coordinacion_id}',[CoordinadorGeneralController::class,'enviarArea'])->name('cd.reporte.area');
Route::get('/CD/global/{curso_id}',[CoordinadorGeneralController::class,'reporteFinalCurso'])->name('cd.reporte.curso');
Route::get('/CD/global/instructores/{curso_id}',[CoordinadorGeneralController::class,'reporteFinalInstructor'])->name('cd.instructores.curso');
Route::post('/CD/participantes/buscar/{curso_id}',[CoordinadorGeneralController::class,'buscarInstructor'])->name('cd.buscar.instructor');

Route::post('/CD/encuesta/create/{participante_id}',[CoordinadorGeneralController::class,'saveFinal_Curso'])->name('cd.create.encuesta');
Route::post('/CD/encuesta/update/{encuesta_id}',[CoordinadorGeneralController::class,'changeFinal_Curso'])->name('cd.update.encuesta');

Route::get('/area', [AreaController::class, 'index'])->name('area.index');
Route::post('/area/buscar/fecha',[AreaController::class,'cambioFecha'])->name('area.cambioFecha');
Route::get('/area/{fecha}',[AreaController::class,'nuevaFecha'])->name('area.nuevaFecha');
Route::post('/area/buscar/curso/{id}',[AreaController::class,'buscarCurso'])->name('area.buscar.curso');
Route::post('/area/buscar_periodo/curso/{id}',[AreaController::class,'buscarCursoPeriodo'])->name('area.buscar.curso.periodo');
Route::get('/area/{coordinacion_id}/nuevo/{busqueda}/{tipo}',[AreaController::class,'nuevoCurso'])->name('area.nuevoCurso');
Route::get('/area/evaluacion/{curso_id}',[AreaController::class,'evaluacion'])->name('area.evaluacion');
Route::get('/area/evaluacion/vista/{participante_id}',[AreaController::class,'evaluacionVista'])->name('area.evaluacion.vista');
Route::post('/area/evaluacion/buscar/{curso_id}',[AreaController::class,'buscarInstructor'])->name('area.buscar.instructor');

Route::get('/area/modificar/final/{participante_id}',[AreaController::class,'modificarEvaluacion'])->name('area.modificar.evaluacion');
Route::get('/area/participantes/{id}',[AreaController::class,'participantes'])->name('area.participantes');
Route::get('/area/final/{id}',[AreaController::class,'reporteFinalCurso'])->name('area.curso');

Route::post('/area/encuesta/create/{participante_id}',[AreaController::class,'saveFinal_Curso'])->name('area.create.encuesta');
Route::post('/area/encuesta/update/{participante_id}/{encuesta_id}',[AreaController::class,'changeFinal_Curso'])->name('area.update.encuesta');