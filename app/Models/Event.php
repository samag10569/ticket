<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
//    ==================================================
    public function category(){

        return $this->belongsTo('App\Models\Category');

            }
    // ==================================================
    public function comment(){

        return $this->hasMany('App\Models\Comment');


            }
      // ==================================================
      public function genre(){

        return $this->belongsTo('App\Models\Genre');

            }

     // ==================================================
     public function favorite(){

        return $this->hasMany('App\Models\Favorite');


            }
      // ==================================================
      public function Eventpoint(){

        return $this->hasMany('App\Models\Eventpoint');


            }
    // ===========================================================
      public function order(){

        return $this->hasMany('App\Models\Order');


            }
      // ==================================================
      public function hall(){

        return $this->belongsTo('App\Models\Hall');

            }
      // ==================================================
      public function sans(){

        return $this->belongsTo('App\Models\Sans');

            }
      // ==================================================
      public function Image(){

        return $this->morphMany('App\Models\Image','imageable');
      }
      // ==================================================
      public function Video(){

        return $this->morphMany('App\Models\Video','videoable');
      }
    //   ==========================================

      public function Tag(){

        return $this->morphToMany('App\Models\Tag','taggable');

    }

}
