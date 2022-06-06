<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentasController extends Controller
{
    public function index(){
        $modulo="Ventas";
        $ventas=Venta::paginate(10);
        return view("$modulo.$modulo",compact('modulo'),['ventas'=>$ventas]);
    }
}
