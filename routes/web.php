<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GusnanController;
use App\Http\Controllers\BagusController;
use App\Http\Controllers\WisnuController;
use App\Http\Controllers\GusadeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bagus', [BagusController::class, 'index']);
Route::get('/wisnu', [WisnuController::class, 'index']);
Route::get('/gusnan', [GusnanController::class, 'index']);
Route::get('/gusade', [GusadeController::class, 'index']);