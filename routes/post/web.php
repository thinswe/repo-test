<?php

use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::name('post.')->group(function(){

    Route::get('/', [PostController::class, 'index'])->name('index');

    Route::get('/create', [PostController::class, 'create'])->name('create');

    Route::post('/', [PostController::class, 'store'])->name('store');

});
