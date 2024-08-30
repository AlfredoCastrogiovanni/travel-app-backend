<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DayController;
use App\Http\Controllers\Api\StageController;
use App\Http\Controllers\Api\TripController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group( function() {
    Route::apiResources([
        'trips' => TripController::class,
        'days' => DayController::class,
        'stages' => StageController::class
    ]);
});