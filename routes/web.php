<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApirestController;
use App\Http\Controllers\HistorialController;

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

Route::get('/', [ApirestController::class, 'index']);
Route::get('/search', [ApirestController::class, 'search'])->name('search');
Route::get('/historial', [HistorialController::class, 'index'])->name('historial');