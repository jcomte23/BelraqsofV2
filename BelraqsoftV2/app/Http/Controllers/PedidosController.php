<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\Existencia;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(){
        $modulo="Pedidos";
        //carga para el combo
        $pedido=Pedido::all();
        return view("$modulo.$modulo",compact('modulo'),['pedidos'=>$pedido]);
    }

    // public function iniciodetalle(Request $request){
    //     $pedido = $request->input('pedido');
    //     $modulo="Detalles";
    //     $productos=Existencia::all();
    //     $detallepedidos=Detallepedido::where('IdPedido',$pedido)->get();
    //     return view("Pedidos.Detalles",compact('modulo','productos'),['detalles'=>$detallepedidos]);
    // }

    public function create(){
        $modulo="Pedidos";
        $pedido=Pedido::all();
        Pedido::create();
        $Existencias = Existencia::all();
        $Cliente = Cliente::all();

        return view("$modulo.Registrar",compact('modulo', 'Existencias', 'Cliente'),['pedidos'=>$pedido]);
    }

    // public function createDetalle(Request $request){
    //     $validated = $request->validate([
    //         'Cantidad'=>'required|min:3',
    //             'Precio'=>'required',

    //     ]);

    //     Pedido::create($validated);
    //     return redirect()->route('clienteIndex')->with('RegistroGuardado', 'Registro Exitoso');
    //     }
}
