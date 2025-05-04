<?php

use App\Http\Controllers\ONGController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\SocialMediaController;
use App\Models\SocialMedia;
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
Route::post('/projetos', [ProjetoController::class, 'store']);
Route::put('/projetos', [ProjetoController::class, 'update']);

Route::post('/redes-sociais', [SocialMediaController::class, 'store']);

Route::get('/cadastrar-projeto', function (){
    return view('cad-projeto');
});

Route::get('/cadastro', function (){
    return view('cadastro');
});

Route::get('/ong/{id}', [ONGController::class, 'show']);
Route::post('/ong', [ONGController::class, 'store']);

Route::get('/login', function (){
    return view('login');
});
Route::post('/login', [ONGController::class, 'login']);

Route::get('/politica-privacidade', function (){
    return view('politica-privacidade');
});

Route::get('/projeto/{id}', [ProjetoController::class, 'show']);

Route::post('/logout', function (){
    session()->forget('user_id');
    return redirect('login');
});