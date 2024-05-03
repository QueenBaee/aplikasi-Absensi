<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsensiController;
use App\Models\Absensi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});


Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/dataGuru',[GuruController::class,'index']);
Route::get('/dataGuru/create',[GuruController::class,'create']);
Route::post('/dataGuru/simpan',[GuruController::class,'store'])->name('dataGuru-simpan');
Route::get('/dataGuru/edit/{id}',[GuruController::class,'edit']);
Route::put('/dataGuru/update/{id}',[GuruController::class,'update'])->name('dataGuru-update');
Route::get('/dataGuru/delete/{id}',[GuruController::class,'destroy'])->name('dataGuru-delete');

Route::get('/absensi',[AbsensiController::class,'index']);
Route::get('/absensi/create',[AbsensiController::class,'create']);
Route::post('/absensi/simpan',[AbsensiController::class,'store'])->name('absensi-simpan');