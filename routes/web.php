<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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
Route::get('login', [LandingController::class, 'login'])->name('login');
Route::get('register', [LandingController::class, 'register'])->name('register');
Route::get('dashboard', [LandingController::class, 'dashboard'])->name('dashboard');

