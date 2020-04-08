<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    // ==================================================
    public function event(){

        return $this->belongsTo('App\Models\Event');

            }

     // ==================================================
     public function user(){

        return $this->belongsTo('App\Models\User');

            }

     // ==================================================
}
