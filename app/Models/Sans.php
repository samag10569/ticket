<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sans extends Model
{
//    ==================================================

    public function date(){

        return $this->belongsTo('App\Models\Date');

            }
//    ==================================================
public function event(){

    return $this->hasMany('App\Models\Event');


        }
  // =================================================

 public function order(){

    return $this->hasMany('App\Models\Order');


        }
  // ==================================================
  public function seat(){

    return $this->belongsToMany('App\Models\Seat');


        }
  // ==================================================
 

}
