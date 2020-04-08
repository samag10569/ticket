<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
//    ==================================================

    public function sans(){

        return $this->hasMany('App\Models\Sans');


            }
//    ==================================================

}
