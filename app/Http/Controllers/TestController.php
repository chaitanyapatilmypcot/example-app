<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class TestController extends Controller
{
    //
        function index(Request $req) {
            
            return ["test" => "Hello, to check auth from sanctum"];
        }
}
