<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrospetsController;
use App\Http\Controllers\CadastropasseadoresController;
use App\Http\Controllers\CadastroclientesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuporteController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginPasseadorController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\PasseioController;

// agendamento
Route::get('/agendamentos', [AgendamentoController::class, 'create'])->name('agendamentos');
Route::post('/agendamentosStore', [AgendamentoController::class, 'store'])->name('agendamentos.store');

//work
Route::get('/work-with-us', [WorkController::class, 'index'])->name('work.with.us');


//Página Home
Route::get('/', [HomeController::class, 'index']);

//Cadastro Passeador
Route::get('/createPasseador', [CadastropasseadoresController::class, 'create']);
Route::get('/indexPasseador', [CadastropasseadoresController::class, 'index'])->middleware('auth');
Route::post('/storePasseador', [CadastropasseadoresController::class, 'store']);
Route::delete('/deletePasseador',[CadastropasseadoresController::class,'delete']);
Route::get('/{id}/editPasseador', [CadastropasseadoresController::class, 'edit']);
Route::put('/updatePasseador', [CadastropasseadoresController::class, 'update']);

//Suporte

Route::get('/createSuporte', [SuporteController::class, 'create']);
Route::get('/indexSuporte', [SuporteController::class, 'index'])->middleware('auth');
Route::post('/storeSuporte', [SuporteController::class, 'store']);

//Login Passeador
Route::get('/loginPasseador', [LoginPasseadorController::class, 'login'])->name('login');
Route::post('/authenticatePasseador', [LoginPasseadorController::class, 'authenticate']);
Route::get('/logoutPasseador', [LoginPasseadorController::class, 'logout']);

//Login

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

//Cadastro Cliente
Route::get('/createCliente', [CadastroclientesController::class, 'create']);
Route::get('/indexCliente', [CadastroclientesController::class, 'index'])->middleware('auth');
Route::post('/storeCliente', [CadastroclientesController::class, 'store']);
Route::delete('/deleteCliente',[CadastroclientesController::class,'delete']);
Route::get('/{id}/editCliente', [CadastroclientesController::class, 'edit']);
Route::put('/updateCliente', [CadastroclientesController::class, 'update']);

//Cadstro de Pet
Route::get('/createPet', [CadastrospetsController::class, 'create']);
Route::get('/indexPet', [CadastrospetsController::class, 'index'])->middleware('auth');
Route::post('/storePet', [CadastrospetsController::class, 'store']);
Route::delete('/deletePet',[CadastrospetsController::class,'delete']);
Route::get('/{id}/editPet', [CadastrospetsController::class, 'edit']);
Route::put('/updatePet', [CadastrospetsController::class, 'update']);

// Página com o mapa e menu lateral
Route::get('/passeio/mapa', [PasseioController::class, 'mapa'])->name('passeio.mapa');

