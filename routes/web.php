<?php

use App\Livewire\FuncionariosCreate;
use App\Livewire\RacoesCreate;
use App\Livewire\RacoesIndex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/racoes', RacoesCreate::class);
Route::get('/racoes/index', RacoesIndex::class);
Route::get('/funcionarios', FuncionariosCreate::class);