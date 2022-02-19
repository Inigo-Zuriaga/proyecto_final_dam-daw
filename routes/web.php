<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuariosController;

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

//Front-end
Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('clasificacion', [AppController::class, 'clasificacion'])->name('clasificacion');
Route::get('comojugar', [AppController::class, 'comojugar'])->name('comojugar');
Route::get('equipo', [AppController::class, 'equipo'])->name('equipo');
Route::get('foro', [AppController::class, 'foro'])->name('foro');
Route::get('acercade', [AppController::class, 'acercade'])->name('acercade');
Route::get('jugar', [AppController::class, 'jugar'])->name('jugar');


//Back-end
Route::get('admin', [AdminController::class, 'index'])->name('admin');

//Auth
Route::get('acceder', [AuthController::class, 'acceder'])->name('acceder');
Route::post('autenticar', [AuthController::class, 'autenticar'])->name('autenticar');
Route::get('registro', [AuthController::class, 'registro'])->name('registro');
Route::post('registrarse', [AuthController::class, 'registrarse'])->name('registrarse');
Route::post('salir', [AuthController::class, 'salir'])->name('salir');

//Usuarios
Route::get('admin/usuarios', [UsuariosController::class, 'index'])->middleware('role:usuarios');

//API Datos
Route::get('mostrardatos', [AppController::class, 'mostrardatos'])->name('mostrardatos');
Route::get('mostrarusuarios', [AppController::class, 'mostrarusuarios'])->name('mostrarusuarios');
Route::get('leer', [AppController::class, 'leer'])->name('leer');

