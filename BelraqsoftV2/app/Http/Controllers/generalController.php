<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class generalController extends Controller
{
    public function __invoke()
    {
        //return view("Login.Login");
        return view("welcome");
    }

    public function index($modulo,$opcion=null){
        if($opcion){
            return view("$modulo.$opcion",['modulo'=>$modulo]);
        }
        return view("$modulo.$modulo",['modulo'=>$modulo]);
    }
}
