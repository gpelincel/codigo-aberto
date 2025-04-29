<?php

use App\Http\Controllers\ProjetoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre-nos', function () {
    return view('sobre-nos');
});

Route::get('/voluntarios', function () {
    return view('voluntarios');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/fale-conosco', function () {
    return view('fale-conosco');
});

Route::get('/doar', function () {
    return view('doar');
});

Route::get('/projetos', [ProjetoController::class, 'index']);
Route::get('/projetos/{id}', [ProjetoController::class, 'show']);
Route::post('/projetos', [ProjetoController::class, 'save']);
Route::put('/projetos', [ProjetoController::class, 'update']);