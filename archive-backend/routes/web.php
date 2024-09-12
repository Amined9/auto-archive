<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {return view('welcome'); });
Route::get('/dashboard', function() {return view('Pages.dashboard'); });
Route::get('/login', function() {return view('Pages.login'); });
Route::get('/register', function() {return view('Pages.register'); });
Route::get('/{any}', function () {return view('welcome');})->where('any', '.*');  // 'welcome' est le fichier Blade principal avec la div #app



