<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\Tipo_Documento;

class VentasController extends Controller
{
    public function index(){
        $modulo="Ventas";
        $ventas=Venta::all();
        $clientes=Cliente::all();
        $Usuarios=Usuario::all();
        return view("$modulo.$modulo",compact('modulo','ventas','clientes','Usuarios'));
    }

    public function actualizarEstado(Venta $venta){ 
        if($venta->Estado==1)
            $venta->Estado=0;
        else        
            $venta->Estado=1;
        $venta->update();
        return redirect()->route('ventaIndex')->with('EstadoActualizado', 'Estado cambiado');
    }

    public function actualizar(Venta $venta){
        $rutaGuardarImg = 'img/Comprobantes/';

                
        $venta->update();
        return redirect()->route('ventaIndex')->with('EstadoActualizado', 'Estado cambiado');
    }
}
