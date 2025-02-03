<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruteriaController;
use App\Http\Controllers\LoginController;
use App\Models\Fruteria;


Route::get('/', [FruteriaController::class, 'index'])->name('index');

Route::resource('fruteria', FruteriaController::class)->except(['index']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('login', [LoginController::class, 'redirectToLogin'])->name('redirectLogin');
Route::post('login', [LoginController::class, 'checkLogin'])->name('login');

