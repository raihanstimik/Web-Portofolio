<?php


use App\Http\Controllers\FormulirController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.user.index');
});

Auth::routes();
//admin route
Route::get('/user/admin/index', [UserController::class, 'index'])->name('admin');
Route::get('user/admin/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('storeUser');
Route::get('user/admin/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('/admin/index/{id}', [UserController::class, 'update'])->name('update');
Route::DELETE('/admin/index/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::prefix('dashboard')->group(
    function() {
        //dashboard route
        Route::resource('template',TemplateController::class);
        Route::resource('form',FormulirController::class);
    }
);
Route::prefix('user')->group(
    function() {
        //main(user) route
        Route::resource('main',MainController::class);
    }
);

