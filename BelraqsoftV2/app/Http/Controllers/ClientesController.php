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
    return redirect()->route('clienteIndex')->with('mensaje', 'Registro Exitoso');
}

    // public function view($idCliente){
    //     $cliente= Cliente::find($idCliente);
    //     $modulo="Clientes";
    //     $TipoDocumentos=Tipo_Documento::all();
    //     $clientes=Cliente::all();
    //     return view("$modulo.$modulo",compact('modulo','TipoDocumentos','cliente','clientes'));
    // } 
}
