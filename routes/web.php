<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});

Route::get('register', function () {
    return view('register');
});





Route::get('login', [UserController::class,'login'])->name('login')->middleware('guest');
Route::post('auth', [UserController::class,'auth']);
Route::get('daftar', [UserController::class,'daftar'])->middleware('guest');
Route::post('daftar/create', [UserController::class,'create']);
Route::post('logout', [UserController::class,'logout']);

Route::middleware('auth')->group(function () {
        Route::get('profil', [ProfilController::class,'profil'])->middleware('auth');
        Route::get('profil/add', [ProfilController::class,'add']);
        Route::post('profil/create', [ProfilController::class,'create']);
        Route::get('profil/edit/{id}', [ProfilController::class,'edit']);
        Route::post('profil/update/{id}', [ProfilController::class,'update']);
        Route::get('admin', function () {
            return view('admin');
        })->middleware('auth');
    
        Route::get('portofolio', [portofolioController::class,'show'])->middleware('auth');
        Route::get('portofolio/add', [portofolioController::class,'add']);
        Route::post('portofolio/create', [portofolioController::class,'create']);
        Route::get('portofolio/delete/{id}', [portofolioController::class,'delete']);
        Route::get('portofolio/edit/{id}', [portofolioController::class,'edit']);
        Route::post('portofolio/update/{id}', [portofolioController::class,'update']);
        Route::get('form', function () {
            return view('formportofolio');
        })->middleware('auth');
        
        Route::get('contact', [ContactController::class,'show'])->middleware('auth');
        Route::get('contact/delete/{id}', [ContactController::class,'delete']);
    });
    Route::post('contact/create', [ContactController::class,'create']);
    
    
Route::get('tampilan', [ProfilController::class,'show']);

