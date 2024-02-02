<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // function loadView() {
    //     $data = ['anil', 'Chaitu', 'Hemanshu', 'Chomu'];
    //     return view("users", ["users" => $data]);
    // }

    function getData(Request $req) {

        $req->validate([
            'username' => 'required | max:10',
            'userpassword' => 'required | min:5'
        ]);
        return $req->input( );    // Whatever is inputed in the form show it
    }
}
