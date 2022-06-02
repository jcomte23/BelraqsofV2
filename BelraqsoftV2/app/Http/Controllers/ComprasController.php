<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    

    public function index(){
        $modulo="Compras";
        return view("$modulo.$modulo",compact('modulo'));
    }

    public function registrar(){
        $modulo="Compras";
        return view("$modulo.Registrar",compact('modulo'));
    }

    public function editar(){
        $modulo="Compras";
        return view("$modulo.Editar",compact('modulo'));
    }
}
