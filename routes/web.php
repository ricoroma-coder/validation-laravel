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

Route::get('/', "ClienteControlador@index")->name('clientes');
Route::get('/novo', "ClienteControlador@create")->name('novoCliente');
Route::post('/cliente', "ClienteControlador@store")->name('insertCliente');
