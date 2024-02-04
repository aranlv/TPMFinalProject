<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::resource('/', LandingController::class);

Route::get('login', [LandingController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [LandingController::class, 'register'])->name('register')->middleware('guest');
Route::get('dashboard', [LandingController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::post('register', [RegisterController::class, 'store'])->name('store');
