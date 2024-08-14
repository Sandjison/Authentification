<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {

//     if (Auth::check()) {
//         return redirect()->route('dashboard');
//     }

//     return view('login');
// })->name('login');

// Route::get('/login', function () {

//     if (Auth::check()) {
//         return redirect()->route('dashboard');
//     }

//     return view('login');
// })->name('login');

// Route::get('/registration', function () {
//     if (Auth::check()) {
//         return redirect()->route('dashboard');
//     }

//     return view('registration');
// })->name('registration');

// Route::get('/logout', function () {
//     Auth::logout();

//     return redirect('/');
// })->name('logout');

// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::post('/login', [AuthController::class, 'login'])->name('login.process');
// Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');

// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [MainController::class, 'vue'])->name('login');

Route::get('/login',[MainController::class, 'login'])->name('login');


Route::get('/registration', [MainController::class,'registration'])->name('registration');

Route::get('/logout',  [MainController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function (){

    Route::get('/dashboard', [MainController::class,'dashboard'])->name('dashboard');
});

Route::post('/login',[AuthController::class , 'login'])->name('login.process');
Route::post('/registration',[AuthController::class , 'registration'])->name('registration.process');