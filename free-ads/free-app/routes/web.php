<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'showIndex']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [IndexController::class, 'showIndex']);

Route::get('/formulaire/create', function () {
    return view('formulaire'); 
})->name('formulaire.create');

Route::post('/annonces', [AnnonceController::class, 'store'])->name('annonces.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/annonces/search', [AnnonceController::class, 'search'])->name('annonces.search');

Route::get('/annonces/results', [AnnonceController::class, 'results'])->name('annonces.results');

