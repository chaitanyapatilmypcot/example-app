<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Models for Db connection
//use App\Models\User;
use Illuminate\Support\Facades\DB;

//HTTP client use
use Illuminate\Support\Facades\Http;


// API auth using sanctum
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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

    function login(Request $request)
    {
        $user= User::where('email', $request->email)->first();
        // print_r($data);
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
        
             $token = $user->createToken('my-app-token')->plainTextToken;
        
            $response = [
                'user' => $user,
                'token' => $token
            ];
        
             return response($response, 201);
    }
    
    
}
