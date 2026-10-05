<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/jeux');

Route::get('/jeux', [GameController::class, 'index'])->name('games.index');
Route::get('/jeux/nouveau', [GameController::class, 'create'])->name('games.create');
Route::post('/jeux', [GameController::class, 'store'])->name('games.store');
Route::get('/jeux/{id}', [GameController::class, 'show'])->whereNumber('id')->name('games.show');

Route::get('/prets', [LoanController::class, 'index'])->name('loans.index');

Route::view('/composants', 'styleguide')->name('styleguide');
