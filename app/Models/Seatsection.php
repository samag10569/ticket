<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seatsection extends Model
{
     // ==================================================
     public function hall(){

        return $this->belongsTo('App\Models\Hall');

            }
     // ==================================================

    public function order(){

        return $this->hasMany('App\Models\Order');


        }
  // ==================================================
  public function price(){

    return $this->belongsTo('App\Models\Price');

        }
 // ==================================================
 public function seat(){

    return $this->hasMany('App\Models\Seat');


    }
// ==================================================
}
