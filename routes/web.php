<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeahlianController;
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
Route::get('/user/admin', [UserController::class, 'index'])->name('/user/admin');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('storeUser');
Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('/admin/{id}', [UserController::class, 'update'])->name('update');
Route::DELETE('/admin/{id}', [UserController::class, 'destroy'])->name('user.destroy');

//Profil route
Route::get('/user/profil/index', [ProfilController::class, 'index'])->name('/user/profil/index');

//pengalaman route
Route::get('/user/pengalaman/index', [PengalamanController::class, 'index'])->name('back/index');
Route::get('/user/pengalaman/create', [PengalamanController::class, 'create'])->name('pengalaman');

//pendidikan route
Route::get('/user/pendidikan/index',[PendidikanController::class,'index'])->name('pendidikan');
Route::get('/user/pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan/create');

//keahlian route
Route::get('/user/keahlian/index',[KeahlianController::class,'index'])->name('keahlian.index');
Route::get('/user/keahlian/create',[KeahlianController::class,'create'])->name('keahlian.create');


//dashboard route
Route::get('/user/dashboard',[DashboardController::class, 'index'])->name('user.dashboard');
