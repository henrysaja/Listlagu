<?php

use App\Http\Controllers\LaguController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Dashboard');
});

Route::get('/lagu/create', [LaguController::class, 'create'])->name('lagu.create');
Route::post('/lagu', [LaguController::class, 'store'])->name('lagu.store');
Route::get('/lagu', [LaguController::class, 'index'])->name('lagu.index');
