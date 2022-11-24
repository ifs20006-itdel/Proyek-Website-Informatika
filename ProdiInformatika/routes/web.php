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