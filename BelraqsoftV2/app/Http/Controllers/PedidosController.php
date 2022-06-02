<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(){
        $modulo="Pedidos";
        return view("$modulo.$modulo",compact('modulo'));
    }

    public function registrar(){
        $modulo="Pedidos";
        return view("$modulo.Registrar",compact('modulo'));
    }

    public function editar(){
        $modulo="Pedidos";
        return view("$modulo.Editar",compact('modulo'));
    }
}
