<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Models for Db connection
use App\Models\User;
use Illuminate\Support\Facades\DB;

//HTTP client use
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    // function index(){
    //     //DB query to show Results  
    //     return DB::select("select * from users");
    // }

    
    // Use Models to fetch db data
    // function getData(){
    //     return User::all();
    // }

    // HTTP client
    function index() {
        $collection = Http::get("https://reqres.in/api/users?page=2");
        return view('users', [ 'collection' => $collection['data']]);
    }

    //HTTP Requests
    function testRequest(Request $req) {
        return $req->input();
    }
    
    
}
