<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    // Query Builder
    function dbOperation() {
        return DB::table('users')
        //to insert
        ->insert(
                [
                    'name' => 'sunita',
                    'email' => 'sunita@gmail.com',
                    'address' => 'vasai '
                ]
                );
        
        //to delete
        // ->where('id', 11)
        // ->delete();




        // to update value
        // ->where('id', 11)
        // ->update(
        //     [
        //         'name' => 'sunita',
        //         'email' => 'sunita@gmail.com',
        //         'address' => 'vasai '
        //     ]
        //     );

        // to display values
        // ->where('address', 'lorem epsum')
        // ->get();

         // ->count(), ->find(id)
    }
}
