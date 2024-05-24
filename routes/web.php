<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilialeController;
use App\Http\Controllers\AutomezzoController;

Route::get('/', function () {return view('welcome');});

// Route Filiali //

Route::get('/filiali', [FilialeController::class, 'index'])->name('filiali.index');
Route::get('/filiali/{filiale}',[FilialeController::class, 'show'])->name('filiali.show');


// Route Automezzi //

Route::get('/automezzi', [AutomezzoController::class, 'index'])->name('automezzi.index');
Route::get('/automezzi/{automezzo}',[AutomezzoController::class, 'show'])->name('automezzi.show');