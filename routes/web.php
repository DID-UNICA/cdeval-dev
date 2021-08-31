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
Route::get('/CD/area/{semestre}/{periodo}/{division}',[CoordinadorGeneralController::class,'area'])->name('cd.area');
Route::post('CD/area/buscar/curso/{id}/{semestreEnv}/{periodo}',[CoordinadorGeneralController::class,'buscarCurso'])->name('cd.buscar.curso');
Route::get('/CD/evaluacion/{id}',[CoordinadorGeneralController::class,'evaluacion'])->name('cd.evaluacion');
Route::get('CD/evaluacion/final/{curso_id}/{profesor_id}',[CoordinadorGeneralController::class,'evaluacionVista'])->name('cd.evaluacion.vista');
Route::get('/CD/participantes/{curso_id}',[CoordinadorGeneralController::class,'participantes'])->name('cd.participantes');
Route::get('descargar/global/{fecha}/{semestral}',[CoordinadorGeneralController::class,'globalPDF'])->name('cd.global_pdf');
Route::get('/CD/global/{semestre}/{periodo}/{coordinacion_id}',[CoordinadorGeneralController::class,'enviarArea'])->name('cd.reporte.area');
Route::get('/CD/global/{curso_id}',[CoordinadorGeneralController::class,'reporteFinalCurso'])->name('cd.reporte.curso');

Route::post('/finalc/{profesor_id}/{curso_id}/{catalogoCurso_id}',[CoordinadorGeneralController::class,'saveFinal_Curso'])->name('final.curso');
Route::post('/finals/{profesor_id}/{curso_id}/{catalogoCurso_id}',[CoordinadorGeneralController::class,'saveFinal_Seminario'])->name('final.seminario');

Route::get('/area',[AreaController::class,'index'])->name('area.index');
Route::post('/area/buscar/fecha',[AreaController::class,'cambioFecha'])->name('area.cambioFecha');
Route::post('/area/buscar/curso/{id}',[AreaController::class,'buscarCurso'])->name('area.buscar.curso');
Route::get('/area/evaluacion/{id}',[AreaController::class,'evaluacion'])->name('area.evaluacion');
Route::get('/area/evaluacion/{id}/{profesor_id}',[AreaController::class,'evaluacionVista'])->name('area.evaluacion.vista');
Route::get('/area/participantes/{id}',[AreaController::class,'participantes'])->name('area.participantes');
Route::post('/area/finalc/{profesor_id}/{curso_id}/{catalogoCurso_id}',[AreaController::class,'saveFinal_Curso'])->name('area.final.curso');
Route::post('/area/finals/{profesor_id}/{curso_id}/{catalogoCurso_id}',[AreaController::class,'saveFinal_Seminario'])->name('area.final.curso');