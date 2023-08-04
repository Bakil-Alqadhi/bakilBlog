<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;


Route::prefix('author')->name('author.')->group(function () {

    Route::middleware('guest:web')->group(function () {
        Route::view('login', 'back.pages.auth.login')->name('login');
        Route::view('forget-password', 'back.pages.auth.forget')->name('forget-password');
        Route::get('/password/reset/{token}', [AuthorController::class, 'resetForm'])->name('reset-form');
    });


    Route::middleware(['auth:web'])->group(function () {
        Route::get('/home', [AuthorController::class, 'index'])->name('home');
        Route::post('/logout', [AuthorController::class, 'destroy'])->name('logout');
    });
});
