<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginsController extends Controller
{
    public function index(){

        return view("auth.login");
    }
}
