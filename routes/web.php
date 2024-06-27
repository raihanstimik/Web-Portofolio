<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user/admin', [UserController::class, 'index']);
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('/admin/{id}', [UserController::class, 'update'])->name('update');
Route::DELETE('/admin/{id}', [UserController::class, 'destroy'])->name('user.destroy');