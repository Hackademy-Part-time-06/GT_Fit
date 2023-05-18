<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class,'homepage'])->name('homepage');
Route::get('/corsi_disponibili',[PageController::class,'corsi'])->name('corsi');
Route::get('/dettaglio_corso/{detail}',[PageController::class,'detail'])->name('details');
Route::get('/contatti',[PageController::class,'contatti'])->name('contact');

Route::post('/send',[PageController::class,'send'])->name('send');