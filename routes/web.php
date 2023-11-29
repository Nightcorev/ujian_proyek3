<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\TenanController;
use App\Http\Controllers\TransaksiController;
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
    return redirect()->route('barang.index');
});
Route::resource('barang',BarangController::class);
Route::resource('kasir',KasirController::class);
Route::resource('tenan',TenanController::class);
Route::resource('nota',NotaController::class);