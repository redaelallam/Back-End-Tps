<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CalculatriceController;


Route::get('/', [CalculatriceController::class, 'index'])->name('index');
Route::post('/calculatrice', [CalculatriceController::class, 'result'])->name('calcul');
