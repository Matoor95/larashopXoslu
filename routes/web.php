<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
// route qui retourne une page (view)
// Route::get('/', function () {
//     return view('products.index');
// });
Route::get('/',[ProductController::class,'index']);
