<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.master');
});
Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/tabel', [HomeController::class, 'tables']);

Route::get('/data-tabel', [HomeController::class, 'data']);

route::resource('casts', castsController::class,);
