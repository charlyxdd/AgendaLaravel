<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function loginPost(){

    }

    public function loginGet(){
       if(Auth::check()){
           return "Ya se ha iniciado sesión";
       }

        return "formulario de login";
    }
}
