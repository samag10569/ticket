<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // ==================================================
 public function seat(){

    return $this->hasMany('App\Models\Seat');


    }
// ==================================================
}
