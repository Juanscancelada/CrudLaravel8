<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articulos', ArticuloController::class);