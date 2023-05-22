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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('berita');
Route::get('/detail/{id}', [\App\Http\Controllers\PostController::class,'detail'])->name('detail');
Route::get('/post', [\App\Http\Controllers\PostController::class,'post'])->name('post');
Route::get('/profil', [\App\Http\Controllers\ProfilController::class,'profil'])->name('profil');
Route::get('/profil', [\App\Http\Controllers\OrganisasiController::class,'pimpinan'])->name('profil');
Route::get('/rantingmuhammadiyah', [\App\Http\Controllers\RantingMuhammadiyahController::class,'prm'])->name('prm');
Route::get('/rantingaisyiyah', [\App\Http\Controllers\RantingAisyiyahController::class,'pra'])->name('pra');
Route::get('/cabangmuhammadiyah', [\App\Http\Controllers\CabangMuhammadiyahController::class,'pcm'])->name('pcm');
Route::get('/cabangaisyiyah', [\App\Http\Controllers\CabangAisyiyahController::class,'pca'])->name('pca');
Route::get('/pemudamuhammadiyah', [\App\Http\Controllers\PemudaMuhammadiyahController::class,'pm'])->name('pm');
Route::get('/nasyiatulaisyiyah', [\App\Http\Controllers\NasyiatulAisyiyahController::class,'na'])->name('na');
Route::get('/masjid', [\App\Http\Controllers\MasjidController::class,'masjid'])->name('masjid');
Route::get('/sekolah', [\App\Http\Controllers\SekolahController::class,'sekolah'])->name('sekolah');
Route::get('/bmt', [\App\Http\Controllers\BMTController::class,'bmt'])->name('bmt');
Route::get('/pantiasuhan', [\App\Http\Controllers\PantiAsuhanController::class,'pantiasuhan'])->name('pantiasuhan');
Route::get('/lazismu', [\App\Http\Controllers\LAZISMUController::class,'lazismu'])->name('lazismu');
Route::get('/anggota', [\App\Http\Controllers\AnggotaController::class,'anggota'])->name('anggota');
Route::get('/prantingmuhammadiyah', [\App\Http\Controllers\PimpinanRantingController::class,'prm'])->name('data_prm');
Route::get('/prantingaisyiyah', [\App\Http\Controllers\PimpinanRantingController::class,'pra'])->name('data_pra');
