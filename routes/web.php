<?php

use App\Http\Controllers\dataApiController;
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

Route::get('/', [dataApiController::class, 'index'])->name('dataJuzQuran');
Route::get('/surah', [dataApiController::class, 'surah'])->name('data.Surah');
Route::get('/ayat/{id}', [dataApiController::class, 'ayat'])->name('dataAyatQuran');
Route::get('/doa sehari-hari', [dataApiController::class, 'doa'])->name('dataDoa');
Route::get('/asmaul husna', [dataApiController::class, 'asmaulHusna'])->name('asmaulHusna');
Route::get('/hadist', [dataApiController::class, 'hadist'])->name('hadist');
