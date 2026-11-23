<?php

use App\Http\Controllers\GusnanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagusController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bagus', [BagusController::class, 'index']);
Route::get('/gusnan', [GusnanController::class, 'index']);
