<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($user) {
        echo "$user <br>";
        echo "Hello from Controller";


        // Can also act like API to Return
        // return ['name' => "anil", 'age' => 27];
    }
} 
