<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // ==================================================
    public function event(){

        return $this->hasMany('App\Models\Event');


            }
      // ==================================================
}
