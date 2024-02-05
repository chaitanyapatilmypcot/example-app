<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MembersController extends Controller
{
    function show() {
        //show all db data
        // $data = User::all();

        // paginate Data
        $data = User::paginate(5);
        return view('list', ['users' => $data]);
    }
}
