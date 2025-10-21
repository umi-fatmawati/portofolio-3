<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProjectController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/portofolio', [PortofolioController::class, 'index'])->name('projects.index');
Route::get('/portofolio/create', [PortofolioController::class, 'create'])->name('projects.create');
Route::post('/portofolio', [PortofolioController::class, 'store'])->name('projects.store');
