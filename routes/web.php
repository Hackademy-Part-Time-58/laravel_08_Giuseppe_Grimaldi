<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;

Route::get('/',[HomeController::class,'home'])->name('homepage');
Route::get('/contacts',[HomeController::class,'contacts'])->name('contacts');
Route::get('/chi-siamo',[HomeController::class,'chiSiamo'])->name('chi.siamo');

// rotte articoli
// Route::get('Create-Article',[ArticlesController::class,'create'])->name('articles.create');
// Route::post('Create-Article',[ArticlesController::class,'store'])->name('articles.store');

Route::middleware(['auth'])->group(function(){
    Route::resource('/articles',ArticleController::class)->except(['index','show']);
    Route::get('/dashboard',[ArticleController::class,'dashboard'])->name('dashboard');
    // Route::get('Create-Article',[ArticlesController::class,'create'])->name('articles.create');
    // Route::post('Create-Article',[ArticlesController::class,'store'])->name('articles.store');
});
Route::resource('/articles',ArticleController::class)->only(['index','show']);
