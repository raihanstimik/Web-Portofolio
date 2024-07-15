<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/dashboard');
});

Auth::routes();
//admin route
Route::get('/user/admin/index', [UserController::class, 'index'])->name('admin');
Route::get('user/admin/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('storeUser');
Route::get('user/admin/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('/admin/index/{id}', [UserController::class, 'update'])->name('update');
Route::DELETE('/admin/index/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::prefix('user')->group(
    function() {
        //main(user) route
        Route::resource('main',MainController::class);
        
        //Profil route
        Route::resource('profil',ProfilController::class);
        
        // //pengalaman route
        Route::resource('pengalaman',PengalamanController::class);
        
        // //pendidikan route
        Route::resource('pendidikan',PendidikanController::class);
        
        // //keahlian route
        Route::resource('keahlian',KeahlianController::class);
        
        // //dashboard route
        // Route::resource('/user/dashboard',DashboardController::class);
    }
);

