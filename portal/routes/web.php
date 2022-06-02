<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\RolController;
use App\http\Controllers\UserController;
use App\http\Controllers\CertificacionController;
use App\http\Controllers\EmpresaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CursoController;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UserController::class);
    Route::resource('certificaciones', CertificacionController::class);
    Route::resource('empresas', EmpresaController::class);
    Route::resource('alumnos', AlumnoController::class);
    Route::resource('cursos', CursoController::class);
});
