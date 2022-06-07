<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tipo_Documento;

class ProveedoresController extends Controller
{
    public function index(){
        $modulo="Proveedores";
        $Documentos=Tipo_Documento::all();

        $Proveedores = Proveedor::all();

        return view("$modulo.$modulo",compact('modulo','Proveedores','Documentos'));


    }
}
