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

        //Validation
        $req-> validate([
            'name' => 'required | max:20',
            'gender' => 'required',
            'dob'  => 'required',
            'address' => 'required | max:20',
            'email' => 'required | unique:users',
            'personality' => 'required',
            'drink' => 'required'
        ]);

        //Add data
        $user = new User;
        $user->name= $req->name;
        $user->gender= $req->gender;
        $user->dob= $req->dob;
        $user->address = $req->address;
        $user->email = $req->email;
        // print_r(implode(',',$req->personality));
        // exit();
        $user->personality = implode(',', $req->personality);     //implode used to convert arr t ostr to sotre in db
        $user->drink = $req->drink;
        

        //Flash Sessions 
        $data = $req->input();
        $req->session()->flash('user', $data['name']);
        
        $user->save();
        return redirect('add');
    }

    function list() {
        $data = User::paginate(10);
        return view('list', ['users' => $data]);
    }

    function delete($id) {
        $data = User::find($id);
        $data->delete();
        
        
        // flash user deleted sucessfully
        return redirect('list')->with('user', $data['name']);

    }

    function edit($id) {
        $data = User::find($id);
        $data->personality = explode(',' , $data->personality);
        return view('edit', ['data' => $data]);

        // $data->edit();
        // return redirect('list');

    }

    function update(Request $req) {
        // return $req->input();
        $data = User::find($req->id);
        $data->name=$req->name;
        $data->gender=$req->gender;
        $data->dob=$req->dob;
        $data->address=$req->address;
        $data->email=$req->email;
        $data->personality= implode(',' , $req->personality);
        $data->drink = $req->drink;
        
        $data->save();
        return redirect('list')->with('edit', $data['name']);
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
