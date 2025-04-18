<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Регистрация
Route::post('/register', [AuthUserController::class, 'store'])->middleware('guest');

//Авторизация
Route::post('/login', [AuthUserController::class, 'login']);

//Деавторизация
Route::delete('/logout', [AuthUserController::class, 'logout'])->middleware('auth');

//Поисковая строка
Route::get('/search', [SearchController::class, 'search'])->name('search');
