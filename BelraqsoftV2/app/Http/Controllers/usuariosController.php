<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $modulo="Usuarios";
        return view("$modulo.$modulo",compact('modulo'));
    }
}
