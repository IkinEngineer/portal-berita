<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PenulisController;


Route::resource('berita',BeritaController::class);

Route::get('/',BeritaController::class. '@welcome');
Route::get('/login',PenulisController::class. '@index');
Route::get('/registrasiform',PenulisController::class. '@registrasiform');
Route::get('/logout',PenulisController::class.'@logout');

Route::post('/login',PenulisController::class.'@login')->name('login');
Route::post('/register',PenulisController::class. '@register')->name('register');
