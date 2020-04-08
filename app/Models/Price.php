<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    // ==================================================
public function seatsection(){

    return $this->hasMany('App\Models\Seatsection');

        }
// ==================================================
}
