<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\ClubScoreController;
use App\Http\Controllers\Club2ScoreController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClubScoreController::class, 'index'])->name('club-scores.index');


Route::get('/club', [ClubController::class, 'index'])->name('club.index');
Route::post('/club-store', [ClubController::class, 'store'])->name('club.store');

Route::get('/club-scores', [ClubScoreController::class, 'create'])->name('club-scores.create');
Route::post('/club-scores', [ClubScoreController::class, 'store'])->name('club-scores.store');

Route::get('/club2-scores', [Club2ScoreController::class, 'create'])->name('club2-scores.create');
Route::post('/club2-scores', [Club2ScoreController::class, 'store'])->name('club2-scores.store');

