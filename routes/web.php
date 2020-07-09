<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/clientes/novo', function () {
    return view('novo_cliente');
})->name('novoCliente');
