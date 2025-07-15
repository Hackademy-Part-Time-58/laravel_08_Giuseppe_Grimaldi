<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;

Route::get('/',[HomeController::class,'home'])->name('homepage');
Route::get('/Contacts',[HomeController::class,'contacts'])->name('contacts');
Route::get('/Chi_siamo',[HomeController::class,'chiSiamo'])->name('chi.siamo');

// rotte articoli
Route::get('/Articles',[ArticlesController::class,'index'])->name('articles.index');
Route::get('/Articles/{id}',[ArticlesController::class,'show'])->name('detail.article');
Route::get('Create-Article',[ArticlesController::class,'create'])->name('articles.create');
Route::post('Create-Article',[ArticlesController::class,'store'])->name('articles.store');

Route::middleware(['auth'])->group(function(){
Route::get('Create-Article',[ArticlesController::class,'create'])->name('articles.create');
Route::post('Create-Article',[ArticlesController::class,'store'])->name('articles.store');
});
