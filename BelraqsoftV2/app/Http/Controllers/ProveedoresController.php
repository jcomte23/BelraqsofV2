<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProveedoresController extends Controller
{
    public function index(){
        $modulo="Proveedores";

        $Proveedores = Proveedor::paginate(15);

        return view("$modulo.$modulo",compact('modulo','Proveedores'));


    }
}
