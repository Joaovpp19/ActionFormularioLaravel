<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/quemsomos', function () {
    return view('quemsomos');
})->name('quemsomos');

Route::get('/contato', [ContatoController::class, 'create'])->name('contato');
Route::post('/contato', [ContatoController::class, 'enviarContato'])->name('contato.enviar');

