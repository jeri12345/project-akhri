<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/databuku', [BukuController::class, 'index']);

Route::get('/dataanggota', [AnggotaController::class, 'index']);

Route::get('/datapeminjaman', [PeminjamanController::class, 'index']);


Route::resource('buku', BukuController::class); 

Route::resource('anggota', AnggotaController::class);

Route::resource('peminjaman', PeminjamanController::class);

