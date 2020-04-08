<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    // ==================================================
    public function order(){

        return $this->belongsTo('App\Models\Order');

            }
    // ==================================================
    public function seat(){

        return $this->belongsTo('App\Models\Seat');

            }
//    ==================================================
}
