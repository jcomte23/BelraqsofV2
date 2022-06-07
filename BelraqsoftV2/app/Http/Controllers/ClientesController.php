<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Tipo_Documento;

class ClientesController extends Controller
{
    public function index(){
        $modulo="Clientes";
        //carga para el combo
        $Documentos=Tipo_Documento::all();
        $clientes=Cliente::all();
        return view("$modulo.$modulo",compact('modulo','Documentos'),['clientes'=>$clientes]);
    }
}
