<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function tracking(){

        return view('site.tracking');

    }
    public function contactus(){

        return view('contactus');

    }
    public function blog(){

        return view('blog');

    }

    public function contactus_save(){


    }

    public function search_result(){


    }

    public function upcoming_news(){

    }


}
