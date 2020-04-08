<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //===========================================================
    protected $fillable=['name','videoable_id','videoable_type'];

    public function Videoable(){

        return $this->morphTo();
}
// ==============================================================
}
