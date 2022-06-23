<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentasController extends Controller
{
    public function index(){
        $modulo="Ventas";
        $ventas=Venta::all();
        return view("$modulo.$modulo",compact('modulo'),['ventas'=>$ventas]);
    }

    public function actualizarEstado(Venta $venta){ 
        if($venta->Estado==1)
            $venta->Estado=0;
        else        
            $venta->Estado=1;
        $venta->update();
        return redirect()->route('ventaIndex')->with('EstadoActualizado', 'Estado cambiado');
    }
}
