<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::middleware('api')->group(function () {
    Route::get('/cars', [CarController::class, 'index']);
    Route::get('/cars/{id}', [CarController::class, 'show']);
});
?>