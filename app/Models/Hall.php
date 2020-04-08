<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    // ==================================================
    public function event(){

        return $this->hasMany('App\Models\Event');


            }
      // ==================================================
      public function venue(){

        return $this->belongsTo('App\Models\Venue');

            }

     // ==================================================

     public function seatsections(){

        return $this->hasMany('App\Models\Seatsections');


            }
      // ==================================================
}
