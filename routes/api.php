<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\v1\CategoryController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::apiResource('category', CategoryController::class)->only(['index']);
Route::get('/category/search', [CategoryController::class, 'search']);

Route::resource('magazine', MagazineController::class);
// Route::get('/products/{id}', [ProductController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    // use below codes for simple api routes
    Route::resource('products', ProductController::class);
    Route::get('/products/search/{name}', [ProductController::class, 'search']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
