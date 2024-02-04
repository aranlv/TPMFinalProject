<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\isAdmin;


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

Route::get('admin-panel', [AdminController::class, 'index'])->name('admin-panel')->middleware(isAdmin::class);
Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('delete')->middleware(isAdmin::class);
Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [AdminController::class, 'update'])->name('update')->middleware(isAdmin::class);

Route::post('register', [RegisterController::class, 'store'])->name('store');

Route::get('/download-file/{attribute}', [DashboardController::class, 'download'])->name('download.file');

Route::get('/download-guidelines', [LandingController::class, 'download']);

Route::get('faq', [LandingController::class, 'faq'])->name('faq');


