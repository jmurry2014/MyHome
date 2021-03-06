<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewHomeController;

Route::get('/', function () {return view('posts.home');})->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::post('/logout',[LogoutController::class,'index'])->name('logout');



Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'signIn']);

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'storeUser']);






Route::get('/registerHome',[NewHomeController::class,'index'])->name('newHome')->middleware('auth');
Route::post('registerHome',[NewHomeController::class,'storeData'])->name('createHome');

Route::get('/viewHomes',[NewHomeController::class,'paginatePage'])->name('viewHomes');











Route::get('/housing', function () {
    return view('posts.housing');
});