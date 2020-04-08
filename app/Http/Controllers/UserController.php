<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile(){
        return view('userpages.profile');
    }

    public function edit_profile(){

    }

    public function ticket_history(){

    }

    public function favorites_save(){

    }

    public function favorites_show(){

    }



    public function register(){
        return view('userpages.register');
    }
    public function login(){
        return view('userpages.login');
    }





}
