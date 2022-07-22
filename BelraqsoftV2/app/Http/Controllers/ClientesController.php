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
        $TipoDocumentos=Tipo_Documento::all();
        $clientes=Cliente::all();
        return view("$modulo.$modulo",compact('modulo','TipoDocumentos'),['clientes'=>$clientes]);
    }

    public function create(Request $request){
    $validated = $request->validate([
        'Nombres'=>'required|min:3',
            'Apellidos'=>'required',
            'TipoDocumento'=>'required',
            'Documento'=>'required',
            'Correo'=>'required|email',
            'Telefonos'=>'required',
            'FechaNacimiento'=>'required',
            'Direccion'=>'required',
            'Ciudad_Municipio'=>'required',
            'Estado'=>'required',
    ]);

    Cliente::create($validated);
    return redirect()->route('clienteIndex')->with('RegistroGuardado', 'Registro Exitoso');
    }

    public function actualizar(Cliente $cliente){
        $campos = request()->validate([
            'Nombres'=>'required|min:3',
                'Apellidos'=>'required',
                'TipoDocumento'=>'required',
                'Documento'=>'required',
                'Correo'=>'required|email',
                'Telefonos'=>'required',
                'FechaNacimiento'=>'required',
                'Direccion'=>'required',
                'Ciudad_Municipio'=>'required',
                'Estado'=>'required',
        ]);

        $cliente->update($campos);
        return redirect()->route('clienteIndex')->with('RegistroActualizado', 'Registro actualizado');
    }

    public function eliminar(Cliente $cliente){
        try {
            $cliente->delete();
            return redirect()->route('clienteIndex')->with('RegistroEliminado', 'Registro eliminado');
        } catch (\Throwable $th) {
            return redirect()->route('clienteIndex')->with('ErrorEliminacionRegistro', 'Registro No eliminado');;
        }
    }

    public function actualizarEstado(Cliente $cliente){

        if($cliente->Estado==1)
            $cliente->Estado=0;
        else
            $cliente->Estado=1;
        $cliente->update();
        return redirect()->route('clienteIndex')->with('EstadoActualizado', 'Estado cambiado');
    }
}
