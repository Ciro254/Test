<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilialeController;
use App\Http\Controllers\AutomezzoController;

Route::get('/', function () {return view('welcome');});

// Route Filiali //

Route::get('/filiali', FilialeController::class)->name('Filiali.index');


// Route Automezzi //

Route::get('/automezzi', AutomezzoController::class)->name('Automezzi.index');