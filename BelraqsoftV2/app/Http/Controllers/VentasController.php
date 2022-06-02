<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentasController extends Controller
{
    public function index(){
        $modulo="Ventas";
        return view("$modulo.$modulo",compact('modulo'));
    }
}
