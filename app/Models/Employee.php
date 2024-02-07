<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function getCompany() {
        //One-to-One Relation

        return $this->hasOne('App\Models\Company');

        //One-to-Many Relation
        //return $this->hasMany('App\Models\Company');
    }
}
