<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// routes cars
Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{id}', [CarController::class, 'show']);

