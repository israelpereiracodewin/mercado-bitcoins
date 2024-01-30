<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {

    if (Auth::check()) 
        return redirect('/dashboard');
    else 
        return redirect('/login');
});


Route::get('/logout', function () {
    
    Auth::logout();
   
    return redirect('/login');
});

Route::get('/login',  App\Livewire\LoginPage::class)->name('login');

Route::get('/register', App\Livewire\RegisterPage::class);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/dashboard', App\Livewire\DashboardPage::class);
    Route::get('/profile', App\Livewire\ProfilePage::class);
});


