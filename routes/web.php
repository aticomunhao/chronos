<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/gerenciar-funcionario', [App\Http\Controllers\GerenciarFuncionarioController::class, 'index'])->name('gerenciar');
Route::get('/incluir-funcionario', [App\Http\Controllers\GerenciarFuncionarioController::class, 'store']);

Route::get('/gerenciar-voluntario', [App\Http\Controllers\GerenciarVoluntarioController::class, 'insert'])->name('gerenciarVoluntario');

