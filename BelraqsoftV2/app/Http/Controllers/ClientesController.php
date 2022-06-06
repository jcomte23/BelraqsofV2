<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function index(){
        $modulo="Clientes";
        $clientes=Cliente::all();
        return view("$modulo.$modulo",compact('modulo'),['clientes'=>$clientes]);
    }
}
