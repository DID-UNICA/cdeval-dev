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

Route::get('/', function () {
    return view('pages.main');
});

Route::get('/CD',[CoordinadorGeneralController::class,'index'])->name('cd.index');
Route::get('/CD/area',[CoordinadorGeneralController::class,'area'])->name('cd.area');
Route::get('/CD/area/evaluacion',[CoordinadorGeneralController::class,'evaluacion'])->name('cd.evaluacion');
Route::get('/CD/area/participantes',[CoordinadorGeneralController::class,'participantes'])->name('cd.participantes');

Route::get('/area',[AreaController::class,'index'])->name('area.index');
