<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dummyAPI extends Controller
{
    //
        function getData() {
            return ['name' => 'anil'];
        }
}
