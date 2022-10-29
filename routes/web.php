<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/signup', [AuthController::class, 'doSignup']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [HomeController::class, 'index']);

    Route::resource('users', UserController::class);

    // Route::get('/users', [UserController::class, 'index']);
    // Route::get('/users/create', [UserController::class, 'create']);
    // Route::post('/users', [UserController::class, 'store']);
    // Route::get('/users/{user}/edit', [UserController::class, 'edit']);
    // Route::put('/users/{user}', [UserController::class, 'update']);
    // Route::delete('/users/{user}', [UserController::class, 'destroy']);
    // Route::get('/users/{user}', [UserController::class, 'show']);

    Route::get('settings', [SettingController::class, 'index']);

});
