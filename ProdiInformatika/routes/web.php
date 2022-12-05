<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\adminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('/admin', [adminController::class, 'admin'])->middleware(['auth', 'verified'])->name('dashboard');

//ADMIN NEWS
Route::get('/admin/berita', [adminController::class, 'berita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addBerita', [adminController::class, 'addBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addBerita_proses', [adminController::class, 'addBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editBerita/{id}', [adminController::class, 'editBerita'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editBerita/proses', [adminController::class, 'editBerita_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusBerita/{id}', [adminController::class, 'hapusBerita'])->middleware(['auth', 'verified'])->name('dashboard');


//ADMIN EVENTS
Route::get('/admin/showEvent', [adminController::class, 'showEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addEvents', [adminController::class, 'addEvents'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addEvents_proses', [adminController::class, 'addEvents_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editEvents/{id}', [adminController::class, 'editEvent'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editEvents/proses', [adminController::class, 'editEvent_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusEvent/{id}', [adminController::class, 'hapusEvent'])->middleware(['auth', 'verified'])->name('dashboard');

//DOSEN 
Route::get('/admin/dosen', [adminController::class, 'dosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/addDosen', [adminController::class, 'addDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/addDosen_proses', [adminController::class, 'addDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/editDosen/{id}', [adminController::class, 'editDosen'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/admin/editDosen_proses', [adminController::class, 'editDosen_proses'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/hapusDosen/{id}', [adminController::class, 'hapusDosen'])->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('adminMenu');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

