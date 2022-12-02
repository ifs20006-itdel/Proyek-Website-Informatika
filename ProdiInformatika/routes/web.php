<?php

use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [BlogController::class, 'home']);
Route::get('/profil_lulusan', [BlogController::class, 'profil_lulusan']);
Route::get('/organisasi', [BlogController::class, 'organisasi']);
Route::get('/kurikulum', [BlogController::class, 'kurikulum']);
Route::get('/sejarah', [BlogController::class, 'sejarah']);
Route::get('/profil-lulusan', [BlogController::class, 'profilLulusan']);
Route::get('/staffDosen', [BlogController::class, 'staffDosen']);
Route::get('/visiMisi', [BlogController::class, 'visiMisi']);

Route::get('/event/{id}',[BlogController::class, 'tampil_event']);
Route::get('/berita/{id}',[BlogController::class, 'tampil_berita']);

//ADMIN
Route::get('/admin/addPost', [BlogController::class, 'addPost']);
Route::post('/addPost_proses', [BlogController::class, 'addPost_proses']);
Route::get('/admin/addEvents', [BlogController::class, 'addEvents']);
Route::post('/addEvents_proses', [BlogController::class, 'addEvents_proses']);







