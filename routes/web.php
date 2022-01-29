<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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



Route::get('/', [BlogController::class, 'index'])->name('index');

Route::get('/tema1', [BlogController::class, 'tema1'])->name('tema1');

Route::get('/tema2', [BlogController::class, 'tema2'])->name('tema2');

Route::get('/tema3', [BlogController::class, 'tema3'])->name('tema3');

Route::get('/tema4', [BlogController::class, 'tema4'])->name('tema4');

Route::get('/tema5', [BlogController::class, 'tema5'])->name('tema5');

Route::get('/tema6', [BlogController::class, 'tema6'])->name('tema6');

Route::get('/tema7', [BlogController::class, 'tema7'])->name('tema7');

Route::get('/tema8', [BlogController::class, 'tema8'])->name('tema8');

Route::get('/tema9', [BlogController::class, 'tema9'])->name('tema9');

