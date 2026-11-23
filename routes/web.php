<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BagusController; // <-- 1. Tambahkan baris ini

Route::get('/', function () {
    return view('welcome');
});

// 2. Tambahkan baris ini di bawahnya
Route::get('/bagus', [BagusController::class, 'index']);