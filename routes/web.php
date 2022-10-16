<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/materias', MateriaController::class)->middleware('auth');

Route::resource('/grados', GradoController::class)->middleware('auth');

Route::resource('/alumnos', AlumnoController::class)->middleware('auth');

Route::resource('/tareas', TareaController::class)->middleware('auth');

Route::get('{archivo}', [App\Http\Controllers\TareaController::class, 'download'])->name('tareas.download');





