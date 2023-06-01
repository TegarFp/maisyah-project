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
use App\Http\Controllers\Auth;


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
    return view('/');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login_proses', [AuthController::class, 'login_proses']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register_proses', [AuthController::class, 'register_proses']);
});

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/', [LadingpageController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/layanan', [LadingpageController::class, 'layanan']);
    Route::get('/lowongan', [LadingpageController::class, 'lowongan'])->name('lowongan');
    Route::get('/lowongan_lamar/{id}', [LadingpageController::class, 'show']);
    Route::post('/lowongan_lamar', [LadingpageController::class, 'store'])->name('lowongan_lamar');
    Route::get('/lowongan_status',[LadingpageController::class, 'status'])->name('lamaran.status');
    Route::post('/lowongan_status/{id}',[LadingpageController::class, 'update']);
});

Route::get('/dashboard', [ LamaranController::class, 'index']);
Route::get('/dashboard/{id}', [LamaranController::class, 'show'])->name('dashboard')->middleware('auth');
Route::post('/dashboard_proses/{id}', [LamaranController::class, 'create'])->middleware('auth');


Route::resource('/lowongans', PekerjaanController::class);



// Route::controller(LamaranController::class)->group(function () {
//     Route::post('/lowongan_status', 'store')->name('lamaran.store')->middleware('isLogin');
//     Route::get('/lowongan_status/{id}', 'show')->name('lamaran.show')->middleware('isLogin');
//     Route::get('/lowongan_status/{id}/edit', 'edit')->name('lamaran.edit')->middleware('isLogin');
//     Route::put('/lowongan_status/{id}', 'update')->name('lamaran.update')->middleware('isLogin');
//     Route::delete('/lowongan_status/{id}', 'destroy')->name('lamaran.destroy')->middleware('isLogin');
//     Route::get('/lowongan_status/{id}/terima', 'terimaLamaran')->name('lamaran.terima')->middleware('isLogin');
//     Route::get('/lowongan_status/{id}/tolak', 'tolakLamaran')->name('lamaran.tolak')->middleware('isLogin');
//     Route::get('/dashboard', 'showDashboard')->name('dashboard')->middleware('isLogin');
// });


// Route::get('/email/need-verification', [VerificationController::class, 'notice'])->middleware('auth')->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->middleware('auth','signed')->name('verification.verify');

// Route::middleware(['auth', 'auth.session','verified'])->group(function () {
//     Route::get('/home', function(){

//     });
// });


// Route::controller(LamarController::class)->group(function () {
//     Route::get('/lowongan_status', 'index');

// });

// Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard')->middleware('isLogin');
// Route::post('/dashboard',[AdminController::class,'store'])->name('dashboard')->middleware('isLogin');


