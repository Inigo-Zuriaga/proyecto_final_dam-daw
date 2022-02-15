<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('clasificacion', [AppController::class, 'clasificacion'])->name('clasificacion');
Route::get('comojugar', [AppController::class, 'comojugar'])->name('comojugar');
Route::get('equipo', [AppController::class, 'equipo'])->name('equipo');
Route::get('foro', [AppController::class, 'foro'])->name('foro');
Route::get('acercade', [AppController::class, 'acercade'])->name('acercade');
Route::get('jugar', [AppController::class, 'jugar'])->name('jugar');

//Back-end
Route::get('admin', [AppController::class, 'index'])->name('admin');
