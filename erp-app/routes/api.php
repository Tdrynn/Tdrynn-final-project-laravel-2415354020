<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServiceController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\SubscriptionController;

Route::apiResource("services", ServiceController::class);
Route::patch("services/{service}/activate", [
    ServiceController::class,
    "activate",
]);
Route::patch("services/{service}/deactivate", [
    ServiceController::class,
    "deactivate",
]);

Route::apiResource("customers", CustomerController::class);
Route::patch("customers/{customer}/activate", [
    CustomerController::class,
    "activate",
]);
Route::patch("customers/{customer}/deactivate", [
    CustomerController::class,
    "deactivate",
]);

Route::apiResource("subscriptions", SubscriptionController::class);

Route::patch('subscriptions/{subscription}/activate', [
    SubscriptionController::class,
    'activate'
]);

Route::patch('subscriptions/{subscription}/deactivate', [
    SubscriptionController::class,
    'deactivate'
]);

Route::patch('subscriptions/{subscription}/dismantle', [
    SubscriptionController::class,
    'dismantle'
]);