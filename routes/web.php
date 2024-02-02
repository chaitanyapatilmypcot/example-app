<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //echo $name;
    return view('welcome');

    // 1. To redirect to Other page 
    //return redirect('about'); 
    
});

// Normal Method to Route

// Route::get('/home', function() {
//     return view('home');
// });

// Route::get('/about', function() {
//     return view('about');
// });

// Route::get('/contact', function() {
//     return view('contact');
// });

//Short version

Route::view('home', 'home');
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('users', 'users');
Route::view('noaccess', 'noaccess');
// Call Contrller
// 1. write 'use App\Http\Controllers\Users;' above to use controller and it's functions.

// Route::get("/users/{user}", [Users::class, 'index']);
// Route::get('/users/{user}', );


// Data Passing through Route
// Route::get('/users/{name}', function($name){
//     return view('users', ['user' => $name]);
// });

// Get the input data through post and send it to the controller to display
//Route::post('users' , [UsersController::class, 'getData']);

// Group Middleware
Route::group(['middleware' => ['protectedPage']], function(){
    Route::view('about', 'about');
    Route::view('users' , [UsersController::class, 'getData']);
});




// Route::view('users', 'users');