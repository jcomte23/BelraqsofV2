<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $modulo="Clientes";
        return view("$modulo.$modulo",compact('modulo'));
    }
}
