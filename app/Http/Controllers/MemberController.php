<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// DB class
use Illuminate\Support\Facades\DB;
use App\Models\User;

class MemberController extends Controller
{
    
    function show() {
        $data = User::all();
        return view('list', ['users' => $data]);
    }

    // add data
    function addData(Request $req) {
        $user = new User;
        $user->name= $req->name;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->save();
        return redirect('add');
    }

    function list() {
        $data = User::all();
        return view('list', ['users' => $data]);
    }

    function delete($id) {
        $data = User::find($id);
        $data->delete();
        return redirect('list');

    }

    function edit($id) {
        $data = User::find($id);
        return view('edit', ['data' => $data]);

        // $data->edit();
        // return redirect('list');

    }

    function update(Request $req) {
        // return $req->input();
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->save();
        return redirect('list');
    }

    function operations(){
        return DB::table('users')->max('name');
        //sum, max, min ,avg, sum
    }

    function index(){
        // return User::all();

        $user = new User;
        $user->name= 'John';
        $user->email= 'John@gmail.com';
        $user->address= 'noida';
        $user->save();

    }
}
