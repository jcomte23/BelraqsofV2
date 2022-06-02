<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index(){
        $modulo="Proveedores";
        return view("$modulo.$modulo",compact('modulo'));
    }
}
