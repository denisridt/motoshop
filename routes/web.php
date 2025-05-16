<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUserController;
Route::view('/', 'index');

//Регистрация
Route::post('/register', [AuthUserController::class, 'store'])->middleware('guest');

//Авторизация
Route::post('/login', [AuthUserController::class, 'login']);

//Деавторизация
Route::delete('/logout', [AuthUserController::class, 'logout'])->middleware('auth');

//Поисковая строка
Route::get('/search', [SearchController::class, 'search'])->name('search');
