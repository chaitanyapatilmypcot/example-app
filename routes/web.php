<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
//use App\Http\Controllers\UserController;


//Models to connect to DB, HTTP client
use  App\Http\Controllers\UserController;

//Sessions
use App\Http\Controllers\UserAuth;

//Flash
use App\Http\Controllers\AddMember;

//Upload 
use App\Http\Controllers\UploadController;

// Show from database
use App\Http\Controllers\MemberController;

//Pagination
// Show from database
use App\Http\Controllers\MembersController;
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

// Route middleware
//Route::view('users', 'users')->middleware('protectedPage');
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
    //Route::post('users' , [UsersController::class, 'getData']);
});


// Database Connection using Controller
//  Route::get('users', [UserController::class, 'index']);

//Database Connection using Models, HTTP client
//Route::get('users', [UserController::class, 'index']);

//HTTP request Methods
Route::delete("users", [UserController::class, 'testRequest']);
// Route::view('login', 'user');


//Sessions
Route::post('user', [UserAuth::class, 'userLogin']);
//Route::view('login', 'login');

Route::view('profile', 'profile');

Route::get('/login', function() {
    if (session()->has('user')){
        return redirect('profile');
    }
    return view('login');
});

Route::get('/logout', function() {
    if (session()->has('user')){
        session()->pull('user');
    }
    return redirect('login');
});


//Flash Sessions
Route::view('add', 'add');
Route::post('addmember', [AddMember::class, 'add']);

//Upload a file
Route::view('upload', 'upload');
Route::post('uploadedfile', [UploadController::class, 'index']);

// Localization - to change languages
Route::get('/profile/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profile');
});

// Show From Db
//Route::get('list', [MemberController::class, 'show']);

//pagination
Route::get('list', [MembersController::class, 'show']);