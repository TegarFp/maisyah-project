<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LamarController;
use App\Http\Controllers\LamaranController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\LadingpageController;
use App\Http\Controllers\VerificationController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

Route::get('/', function () {
    return view('home');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->middleware('isHome');
    Route::post('/login_proses', 'login_proses');
    Route::get('/logout', 'logout');
    Route::get('/register', 'register')->middleware('isHome');
    Route::post('/register_proses', 'register_proses');
});

Route::controller(LadingpageController::class)->group(function () {
    Route::get('/home', 'index')->name('home')->middleware('isLogin');
    Route::get('/layanan', 'layanan');
    Route::get('/lowongan', 'lowongan')->name('lowongan');
    Route::get('/lowongan_lamar/{id}', 'show')->name('lowongan')->middleware('isLogin');

});

Route::controller(LamaranController::class)->group(function () {
    Route::get('/lowongan_status', 'index')->name('lamaran.index')->middleware('isLogin');
    Route::post('/lowongan_status', 'store')->name('lamaran.store')->middleware('isLogin');
    Route::get('/dalam-review', 'review')->name('lamaran.review')->middleware('isLogin');
    Route::get('/tidak-lolos', 'tidak_lolos')->name('lamaran.tidak_lolos')->middleware('isLogin');
    Route::get('/lowongan_status/{id}', 'show')->name('lamaran.show')->middleware('isLogin');
    Route::get('/lowongan_status/{id}/edit', 'edit')->name('lamaran.edit')->middleware('isLogin');
    Route::put('/lowongan_status/{id}', 'update')->name('lamaran.update')->middleware('isLogin');
    Route::delete('/lowongan_status/{id}', 'destroy')->name('lamaran.destroy')->middleware('isLogin');
    Route::get('/lowongan_status/{id}/terima', 'terimaLamaran')->name('lamaran.terima')->middleware('isLogin');
    Route::get('/lowongan_status/{id}/tolak', 'tolakLamaran')->name('lamaran.tolak')->middleware('isLogin');
    Route::get('/dashboard', 'showDashboard')->name('dashboard')->middleware('isLogin');
});

// Route::get('/email/need-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth','signed')->name('verification.verify');

// Route::middleware(['auth', 'auth.session','verified'])->group(function () {
//     Route::get('/home', function(){

//     });
// });


// Route::controller(LamarController::class)->group(function () {
//     Route::get('/lowongan_status', 'index');

// });

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard')->middleware('isLogin');
Route::post('/dashboard',[AdminController::class,'store'])->name('dashboard')->middleware('isLogin');

Route::resource('/lowongans', PekerjaanController::class);
