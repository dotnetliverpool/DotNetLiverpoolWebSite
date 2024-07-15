<?php

use Illuminate\Support\Facades\Route;


Route::domain(config('app.hostname'))
    ->name('public')
    ->group(function () {
        Route::get('/', fn ()
        => view('home'))->name('home');
    });
