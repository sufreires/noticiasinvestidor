<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\NoticiaController;

Route::get('/', [NoticiaController::class, 'index'])->name('noticias.index');
Route::post('/noticias/busca', [NoticiaController::class, 'search']);
Route::get('/noticias/show/{slug}', [NoticiaController::class, 'show']);
Route::get('/noticias/create', [NoticiaController::class, 'create']);
Route::post('/noticias/salvar', [NoticiaController::class, 'store']);
