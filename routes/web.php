<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MusicController::class, 'index'])->name('index');


Route::get('/home', function () {
    return view('home.index');
})->name('home');

//Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/signin', [AuthController::class, 'login'])->name('signin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Actions
Route::get('/create', [MusicController::class, 'create'])->name('music-create')->middleware('auth');
Route::post('store', [MusicController::class, 'store'])->name('music-store')->middleware('auth');
Route::get('/edit/{music}', [MusicController::class, 'edit'])->name('music-edit');
Route::put('/update/{music}', [MusicController::class, 'update'])->name('music-update');
Route::delete('/delete/{music}', [MusicController::class, 'destroy'])->name('music-delete');