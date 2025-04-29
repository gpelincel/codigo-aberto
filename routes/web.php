<?php

use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/projetos', [ProjetoController::class, 'index']);