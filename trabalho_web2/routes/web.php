<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\PageController;
use App\Http\Controllers\bd\BdController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/adm', [PageController::class, 'adm'])->name('adm');
Route::get('/cad', [PageController::class, 'cad'])->name('index');
Route::get('/planos', [PageController::class, 'planos'])->name('plano');
Route::get('/assin', [PageController::class, 'assin'])->name('assinatura');
Route::get('/hora', [PageController::class, 'hora'])->name('hora');


Route::post('/cad', [BdController::class, 'NovoLogin'])->name('cadastrar');
