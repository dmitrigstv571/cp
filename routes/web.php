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
Route::get('/fatura', [App\Http\Controllers\CpflController::class, 'getFaturas'])->name('getFaturas');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/faturas2', [App\Http\Controllers\HomeController::class, 'faturas'])->name('faturas');
Route::get('/unimed/goiania/pix/{valor}', [App\Http\Controllers\PagarmeController::class, 'gerar_pix']);

Route::get('/nome/{cpf}', [App\Http\Controllers\CpflController::class, 'busca_nome'])->name('busca_nome');




