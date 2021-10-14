<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\AuditLogController;

Route::resource('audit-logs', AuditLogController::class);

use App\Http\Controllers\MakananController;

Route::resource('makanans', MakananController::class);