<?php
use Illuminate\Routing\Route;
use App\Http\Controllers\ProductController;

Route::apiResource('products', ProductController::class);
