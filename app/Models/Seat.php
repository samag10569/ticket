<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
      // ==================================================

        public function sans(){

            return $this->belongsToMany('App\Models\Sans');


            }
      // ==================================================
      public function seatsection(){

        return $this->belongsTo('App\Models\Seatsection');

            }
      // ==================================================
      public function status(){

        return $this->belongsTo('App\Models\Status');

            }
      // ==================================================
      public function ticket(){

        return $this->hasMany('App\Models\Ticket');


            }
      // ==================================================

}
