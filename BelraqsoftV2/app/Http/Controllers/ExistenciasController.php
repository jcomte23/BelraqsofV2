<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Existencia;

class ExistenciasController extends Controller
{
    public function index(){
        $modulo="Existencias";
        $existencias=Existencia::all();
        return view("$modulo.$modulo",compact('modulo'),['existencias'=>$existencias]);
    }

    public function create(Request $request){
        $validated = $request->validate([
            'Nombre'=>'required|min:3',
            'Marca'=>'required',
            'Stock'=>'required',
            'ValorUnitario'=>'required',
            'PrecioDedal'=>'required',
            'PrecioMayor'=>'required',
            'Estado'=>'required',
        ]);
    
        Existencia::create($validated);
        return redirect()->route('existenciaIndex')->with('mensaje', 'Registro Exitoso');
    }

    public function actualizar(Existencia $producto){
        $campos = request()->validate([
            'Nombre'=>'required|min:3',
            'Marca'=>'required',
            'Stock'=>'required',
            'ValorUnitario'=>'required',
            'PrecioDedal'=>'required',
            'PrecioMayor'=>'required',
            'Estado'=>'required',
        ]);
    
        $producto->update($campos);
        return redirect()->route('existenciaIndex')->with('registroActualizado', 'Registro actualizado');
    }

    public function eliminar(Existencia $producto){
        try {
            $producto->delete();
            return redirect()->route('existenciaIndex')->with('registroEliminado', 'Cliente eliminado');
        } catch (\Throwable $th) {
            return redirect()->route('existenciaIndex')->with('ErrorEliminacionRegistro', 'Cliente No eliminado');;
        }
    }

    public function actualizarEstado(Existencia $producto){ 
        $campo = request()->validate([
                'Estado'=>'required',
        ]);
        $producto->update($campo);
        return redirect()->route('existenciaIndex')->with('EstadoActualizado', 'Estado cambiado');
    }

}
