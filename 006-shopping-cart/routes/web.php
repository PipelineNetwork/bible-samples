<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembelianController;

Route::get('/barangs/beli/{barang}', [BarangController::class, 'beli']);

Route::resource('barangs', BarangController::class);
Route::resource('pembelians', PembelianController::class);


Route::get('/', function () {
    return view('welcome');
});
