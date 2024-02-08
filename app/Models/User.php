<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//API auth using sanctum
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasFactory;

    // to define which Db name it should refer, you can manually give 
    //public $table ="employee";

    // CRUD (to don't change the schema and show error add th below line)
    public $timestamps = false;

    //Accessors
    // public function getAddressAttribute($value) {
    //     return $value . ', India';
    // }


    //Mutator
    // public function setNameAttribute($value) {
    //     if(substr($value, 0, 3) == 'Mr.'){
    //         $this->attributes['name'] = $value;
    //     } else {
    //         $this->attributes['name'] = 'Mr ' . $value;
    //     }    
    // }

    
//     public function setAddressAttribute($value) {
//         if(substr($value, -1, 6) == ',India'){
//             $this->attributes['address'] = $value;
//         } else {
//             $this->attributes['address'] = $value . ", India";
//         }   
//    }

//    public function setPersonalityAttribute($value) {
//     $this->attributes['personality'] = $value
//    }
}
