<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
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


//get data
Route::get('data', [dummyAPI::class, 'getData']);

//post data
Route::post('product', [ProductController::class, 'add']);

//put data
Route::put('update', [ProductController::class, 'update']);

//delete data
Route::delete('delete/{id}', [ProductController::class, 'delete']);

//search data 
Route::get('search/{name}', [ProductController::class, 'search']);

//save data after validation
Route::post('save', [ProductController::class, 'testData']);

//API Resource 
//Route::apiResource('member', [MemberController::class, 'test']);

//File Upload 
Route::post('upload', [FileController::class, 'upload']);

// Group route to have authorization
Route::group(['middleware' => 'auth:sanctum'], function() {
    //Put the route to which you want to have auth
    Route::get('test', [TestController::class, 'index']);
});

//API auth with Sanctum
Route::post('login', [UserController::class, 'login']);