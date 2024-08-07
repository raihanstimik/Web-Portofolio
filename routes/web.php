<?php


use App\Http\Controllers\FormulirController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.user.index');
});

Auth::routes();

route::get('dashboard/tentang',[TentangController::class,'index'])->name('about');
Route::get('form/result', [FormulirController::class, 'result'])->name('result');
Route::prefix('dashboard')->middleware('auth')->group(
    function() {
        //dashboard route
        Route::get('/unduh-pdf', [PDFController::class, 'unduhPDF'])->name('unduh-pdf');
        Route::resource('template',TemplateController::class);
        Route::resource('form',FormulirController::class);
        Route::resource('hasil',HasilController::class);
    }
);

Route::prefix('admin')->middleware(['auth'])->group(
    function () {
        Route::get('', [UserController::class, 'index'])->name('admin');
        Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        Route::resource('user',UserController::class);
        Route::resource('table_data',TableController::class);
        Route::resource('konten',KontenController::class);
    });
