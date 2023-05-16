<?php

use App\http\Controllers\SukuIndonesiaController;
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

Route::get('/', [SukuIndonesiaController::class, 'index']);
Route::get('/tambah', [SukuIndonesiaController::class, 'tambah']);
Route::post('/tambah', [SukuIndonesiaController::class, 'store']);
Route::get('/hapus/{id}', [SukuIndonesiaController::class, 'hapus']);
Route::get('/edit/{id}', [SukuIndonesiaController::class, 'edit']);
Route::post('/edit/{id}', [SukuIndonesiaController::class, 'update']);
Route::get('/lihat/{id}', [SukuIndonesiaController::class, 'lihat']);

