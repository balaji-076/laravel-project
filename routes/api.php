<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('products', ProductController::class);




// Operation	Method	Endpoint	Example Body
// List products	GET	/api/products	–
// Create product	POST	/api/products	{ "name": "Keyboard", "price": 49.99, "stock": 5 }
// Show product	GET	/api/products/1	–
// Update product	PUT	/api/products/1	{ "price": 59.99 }
// Delete product	DELETE	/api/products/1	–