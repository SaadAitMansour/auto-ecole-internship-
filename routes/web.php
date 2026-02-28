<?php

use App\Http\Controllers\InscriptionController;

Route::get('/inscriptions/create', [InscriptionController::class, 'create'])->name('inscriptions.create');
Route::post('/inscriptions', [InscriptionController::class, 'store'])->name('inscriptions.store');





use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


// Élèves
use App\Http\Controllers\EleveController;

Route::resource('eleves', EleveController::class);

// Formations
use App\Http\Controllers\FormationController;

Route::resource('formations', FormationController::class);


// Inscriptions
Route::resource('inscriptions', InscriptionController::class);



Route::resource('inscriptions', InscriptionController::class);

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');




