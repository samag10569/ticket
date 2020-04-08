<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
   // ==================================================
   public function event(){

    return $this->belongsTo('App\Models\Event');

        }
// ==================================================
public function transaction(){

    return $this->hasMany('App\Models\Transaction');


        }
  // ==================================================
  public function ticket(){

    return $this->hasMany('App\Models\Ticket');


        }
  // ==================================================
  public function user(){

    return $this->belongsTo('App\Models\User');

        }
// ==================================================
public function seatsection(){

    return $this->belongsTo('App\Models\Seatsection');

        }
// ==================================================
public function sans(){

    return $this->belongsTo('App\Models\Sans');

        }
// ==================================================

}
