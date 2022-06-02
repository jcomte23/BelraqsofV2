<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExistenciasController extends Controller
{
    public function index(){
        $modulo="Existencias";
        return view("$modulo.$modulo",compact('modulo'));
    }
}
