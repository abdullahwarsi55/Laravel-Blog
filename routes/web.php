<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/post',[PostController::class,'index'])->middleware(['auth', 'verified'])->name('postindex');
Route::post('/post',[PostController::class,'create'])->middleware(['auth', 'verified'])->name('createindex');
Route::get('/dashboard',[DashboardController::class,'show_post'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/edit/{id}',[PostController::class,'edit'])->middleware(['auth', 'verified'])->name('edit');
Route::put('/edit/{id}',[PostController::class,'update'])->middleware(['auth', 'verified'])->name('update');
Route::get('/delete/{id}',[PostController::class,'destroy'])->middleware(['auth', 'verified'])->name('delete');
Route::get('/',[HomeController::class,'showall'])->name('home');
require __DIR__.'/auth.php';
