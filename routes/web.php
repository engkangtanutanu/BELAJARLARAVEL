<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\KritikController;





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

Route::controller(AuthController::class)->group(function() {
    Route::get('/registration', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'auth')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');
});

Route::get('/', function () {
    return view('layout.master');
});


Route::get('/', function () {
    return view('auth.login');
});


Route::resource('/cast', CastController::class);
Route::resource('/genre', GenreController::class);
Route::resource('/film', FilmController::class);

Route::get('/film/{film}/peran/create', [PeranController::class, 'create'])->name('peran.create')->middleware('auth');

Route::post('/film/{film}/peran', [PeranController::class, 'store'])->name('peran.store')->middleware('auth');

Route::get('/film/{film}/kritik/create', [KritikController::class, 'create'])->middleware('auth');

Route::post('/film/{film}/kritik', [KritikController::class, 'store'])->name('kritik.store')->middleware('auth');



// Route::get('/register', [AuthController::class, 'register']);
// Route::get('/login', [AuthController::class, 'login']);
// Route::get('/dashboard', [AuthController::class, 'dashboard']);









