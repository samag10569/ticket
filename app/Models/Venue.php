<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    // ==================================================
    public function hall(){

        return $this->hasMany('App\Models\Hall');


            }
      // ==================================================
}
