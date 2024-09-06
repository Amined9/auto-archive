<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {return view('index'); });
Route::get('/dashboard', function() {return view('Pages.dashboard'); });
Route::get('/login', function() {return view('Pages.login'); });
Route::get('/register', function() {return view('Pages.register'); });


