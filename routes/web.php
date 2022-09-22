<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(PageController::class)->group(function(){
    Route::get('/', 'home')->name('home');    

    Route::get('/elementary', 'elementary')->name('elementary');    

    Route::get('/kindergarten', 'kindergarten')->name('kindergarten');    

    Route::get('/about', 'about')->name('about');    

    Route::get('/enrollment', 'enrollment')->name('enrollment');               
});

Route::controller(LoginController::class)->group(function(){
    Route::get('/login', 'index')->name('login');    

    Route::post('/login', 'store');    
});

Route::controller(RegisterController::class)->group(function(){
    Route::get('/register', 'index')->name('register');

    Route::post('/register', 'store');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']); 

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);