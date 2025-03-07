<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'index']);


Route::get('/home', function () {
    return view('home.index');
});

Route::get('/login', function(){
    return view('login.index');
});
