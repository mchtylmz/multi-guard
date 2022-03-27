<?php

use App\Http\Controllers\HomeController;
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


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/campaigns', [HomeController::class, 'index'])->name('campaigns');

Route::get('/points', [HomeController::class, 'index'])->name('points');

Route::get('/gifts', [HomeController::class, 'index'])->name('gifts');

Route::get('/faq', [HomeController::class, 'index'])->name('faq');

Route::get('/profile', [HomeController::class, 'index'])->name('profile');

