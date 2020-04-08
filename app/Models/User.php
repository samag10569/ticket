<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

// ==================================================

    public function comment(){

        return $this->hasMany('App\Models\Comment');


            }
// ==================================================
public function contactus(){

    return $this->hasMany('App\Models\Contactus');


        }
// ==================================================
public function Eventpoint(){

    return $this->hasMany('App\Models\Eventpoint');


        }
// ==================================================
public function favorite(){

    return $this->hasMany('App\Models\Favorite');


        }
// ==================================================

 public function order(){

    return $this->hasMany('App\Models\Order');


        }
  // ==================================================
  public function role(){

    return $this->belongsToMany('App\Models\Role');


        }
  // ==================================================

  public function Image(){

    return $this->morphMany('App\Models\Image','imageable');

}
  // ==================================================

}
