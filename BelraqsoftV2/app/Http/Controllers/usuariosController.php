<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Documento;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $modulo="Usuarios";
        $Documentos=Tipo_Documento::all();
        return view("$modulo.$modulo",compact('modulo','Documentos'));
    }
}
