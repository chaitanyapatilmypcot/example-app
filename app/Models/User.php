<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // to define which Db name it should refer, you can manually give 
    //public $table ="employee";

    // CRUD (to don't change the schema and show error add th below line)
    public $timestamps = false;

    //Accessors
    // public function getAddressAttribute($value) {
    //     return $value . ', India';
    // }

    // public function setNameAttribute($value) {
    //      $this->attributes['name'] = 'Mr ' . $value;
    // }

//     public function setAddressAttribute($value) {
//         $this->attributes['address'] = $value . ", India";
//    }

//    public function setPersonalityAttribute($value) {
//     $this->attributes['personality'] = $value
//    }
}
