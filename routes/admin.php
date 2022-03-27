<?php

use App\Http\Controllers\Dashboard\HomeController;
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

Auth::routes(['register' => false]);

Route::get('/users', [HomeController::class, 'index'])->name('admin.users');

Route::get('/stores', [HomeController::class, 'index'])->name('admin.stores');

Route::prefix('/points')->group(function () {
    Route::get('/winPoints', [HomeController::class, 'index'])->name('admin.winPoints');
    Route::get('/usedPoints', [HomeController::class, 'index'])->name('admin.usedPoints');
});

Route::prefix('/reports')->group(function () {
    Route::get('/points', [HomeController::class, 'index'])->name('admin.reportPoints');
});

Route::get('/profile', [HomeController::class, 'index'])->name('admin.profile');
