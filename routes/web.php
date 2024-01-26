<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

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
    return view('welcome');
});

Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
