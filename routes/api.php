<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::post('users', [UserController::class, 'createUser']);

// //route for post
// Route::post('posts', [PostController::class, 'createPost']);

// Route::get('allusers', [UserController::class, 'index']);


Route::apiResource('users', UserController::class);

Route::apiResource('posts', PostController::class);

Route::apiResource('websites', WebsiteController::class);

Route::apiResource('roles', RoleController::class);