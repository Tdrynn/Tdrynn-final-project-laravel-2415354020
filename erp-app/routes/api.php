<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;

Route::get('/', function () {
    return response()->json([
        'success' => true,
        'message' => 'Welcome to ERP Web API v1'
    ]);
});

Route::apiResource("services", ServiceController::class);
Route::patch("services/{service}/activate", [
    ServiceController::class,
    "activate",
]);
Route::patch("services/{service}/deactivate", [
    ServiceController::class,
    "deactivate",
]);