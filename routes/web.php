<?php
use App\Http\Controllers\CoordinadorGeneralController;
use App\Http\Controllers\AreaController;
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

/*Route::get('/', function () {
    return view('pages.main');
});*/

Route::get('/',[CoordinadorGeneralController::class,'index'])->name('cd.index');

Route::get('/CD',[CoordinadorGeneralController::class,'index'])->name('cd.index');
Route::get('/CD/area/{semestre}/{periodo}/',[CoordinadorGeneralController::class,'global'])->name('cd.global');
Route::get('/CD/participantes/{semestre}/',[CoordinadorGeneralController::class,'asistentesGlobal'])->name('cd.participantes');
Route::get('/CD/area/{semestre}/{periodo}/{division}',[CoordinadorGeneralController::class,'area'])->name('cd.area');
Route::post('CD/area/buscar/curso/{id}/{semestreEnv}/{periodo}',[CoordinadorGeneralController::class,'buscarCurso'])->name('cd.buscar.curso');
Route::get('/CD/evaluacion/{id}',[CoordinadorGeneralController::class,'evaluacion'])->name('cd.evaluacion');
Route::get('CD/evaluacion/final/{curso_id}/{profesor_id}',[CoordinadorGeneralController::class,'evaluacionVista'])->name('cd.evaluacion.vista');
Route::get('CD/modificar/final/{curso_id}/{profesor_id}',[CoordinadorGeneralController::class,'modificarEvaluacion'])->name('cd.modificar.evaluacion');
Route::get('/CD/participantes/{curso_id}',[CoordinadorGeneralController::class,'participantes'])->name('cd.participantes');
Route::get('descargar/global/{fecha}/{semestral}',[CoordinadorGeneralController::class,'globalPDF'])->name('cd.global_pdf');
Route::get('/CD/global/{semestre}/{periodo}/{coordinacion_id}',[CoordinadorGeneralController::class,'enviarArea'])->name('cd.reporte.area');
Route::get('/CD/global/{curso_id}',[CoordinadorGeneralController::class,'reporteFinalCurso'])->name('cd.reporte.curso');
Route::get('/CD/global/instructores/{curso_id}',[CoordinadorGeneralController::class,'reporteFinalInstructor'])->name('cd.instructores.curso');
Route::post('/CD/participantes/buscar/{curso_id}',[CoordinadorGeneralController::class,'buscarInstructor'])->name('cd.buscar.instructor');

Route::post('/finalc/{profesor_id}/{curso_id}/{catalogoCurso_id}',[CoordinadorGeneralController::class,'saveFinal_Curso'])->name('final.curso');
Route::post('/finals/{profesor_id}/{curso_id}/{catalogoCurso_id}',[CoordinadorGeneralController::class,'saveFinal_Seminario'])->name('final.seminario');

Route::post('/finalc/cambio/{profesor_id}/{curso_id}/{catalogoCurso_id}',[CoordinadorGeneralController::class,'changeFinal_Curso'])->name('final.change');
Route::post('/finals/cambio{profesor_id}/{curso_id}/{catalogoCurso_id}',[CoordinadorGeneralController::class,'changeFinal_Seminario'])->name('final.seminario.change');


Route::get('/area',[AreaController::class,'index'])->name('area.index');
Route::post('/area/buscar/fecha',[AreaController::class,'cambioFecha'])->name('area.cambioFecha');
Route::get('/area/{fecha}',[AreaController::class,'nuevaFecha'])->name('area.nuevaFecha');
Route::post('/area/buscar/curso/{id}',[AreaController::class,'buscarCurso'])->name('area.buscar.curso');
Route::get('/area/{coordinacion_id}/{busqueda}/{tipo}',[AreaController::class,'nuevoCurso'])->name('area.nuevoCurso');
Route::get('/area/evaluacion/{id}',[AreaController::class,'evaluacion'])->name('area.evaluacion');
Route::get('/area/evaluacion/{id}/{profesor_id}',[AreaController::class,'evaluacionVista'])->name('area.evaluacion.vista');
Route::get('/area/modificar/final/{id}/{profesor_id}',[AreaController::class,'modificarEvaluacion'])->name('area.modificar.evaluacion');
Route::get('/area/participantes/{id}',[AreaController::class,'participantes'])->name('area.participantes');
Route::get('/area/final/{id}',[AreaController::class,'reporteFinalCurso'])->name('area.curso');
Route::post('/area/finalc/{profesor_id}/{curso_id}/{catalogoCurso_id}',[AreaController::class,'saveFinal_Curso'])->name('area.final.curso');
Route::post('/area/finals/{profesor_id}/{curso_id}/{catalogoCurso_id}',[AreaController::class,'saveFinal_Seminario'])->name('area.seminario.curso');

Route::post('/area/finalc/cambio/{profesor_id}/{curso_id}/{catalogoCurso_id}',[AreaController::class,'changeFinal_Curso'])->name('area.final.change');
Route::post('/area/finals/cambio/{profesor_id}/{curso_id}/{catalogoCurso_id}',[AreaController::class,'changeFinal_Seminario'])->name('area.final.seminario.change');
Route::post('/area/participantes/buscar/{curso_id}',[CoordinadorGeneralController::class,'buscarInstructor'])->name('area.buscar.instructor');