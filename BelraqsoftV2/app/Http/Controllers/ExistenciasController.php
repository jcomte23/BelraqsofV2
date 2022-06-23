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
        return redirect()->route('existenciaIndex')->with('RegistroGuardado', 'Registro Exitoso');
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
        return redirect()->route('existenciaIndex')->with('RegistroActualizado', 'Registro actualizado');
    }

    public function eliminar(Existencia $producto){
        try {
            $producto->delete();
            return redirect()->route('existenciaIndex')->with('RegistroEliminado', 'Registro eliminado');
        } catch (\Throwable $th) {
            return redirect()->route('existenciaIndex')->with('ErrorEliminacionRegistro', 'Registro No eliminado');;
        }
    }

    public function actualizarEstado(Existencia $producto){ 
        if($producto->Estado==1)
            $producto->Estado=0;
        else        
            $producto->Estado=1;
        $producto->update();
        return redirect()->route('existenciaIndex')->with('EstadoActualizado', 'Estado cambiado');
    }

}
