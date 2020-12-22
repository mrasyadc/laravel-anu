<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
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
//memanggil method get pada Object Route NamaObject::nama_method
Route::get('/welcome', function () {
    return view('welcome'); //menampilkan file dengan nama welcome.blade.php yang ada di folder public
})->name('welcome');

Route::get('/halo', function () {
    return view('coba');
})->name('halo');

Route::get('web', [PegawaiController::class, 'coba']);

Route::get('pegawai', [PegawaiController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);

Route::post('/pegawai/store', [PegawaiController::class, 'store']);

Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);

Route::post('/pegawai/update', [PegawaiController::class, 'update']);

Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
