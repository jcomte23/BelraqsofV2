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

    public function guardar(){    
        $campos=request()->validate([
            'Nombres'=>'required|min:3',
            'Apellidos'=>'required',
            'TipoDocumento'=>'required',
            'Documento'=>'required',
            'Correo'=>'required|email',
            'Telefonos'=>'required',
            'FechaNacimiento'=>'required',
            'Direccion'=>'required',
            'Ciudad_Municipio'=>'required', 
        ]);
        
        Cliente::create($campos);
        return redirect('clienteIndex');
    }

    // public function create(Request $request){
    //     $cliente=new Cliente;
    //     $cliente->Nombres=$request->txtNombreCliente;
    //     $cliente->Apellidos=$request->txtApellidosCliente;
    //     $cliente->TipoDocumento=$request->txtTipo_Doc;
    //     $cliente->Documento=$request->txtDocumento;
    //     $cliente->Correo=$request->txtCorreo;
    //     $cliente->Telefonos=$request->txtTelefonos;
    //     $cliente->FechaNacimiento=$request->txtFecha;
    //     $cliente->Direccion=$request->txtDireccion;
    //     $cliente->Ciudad_Municipio=$request->txtCiudad;
    //     $cliente->Estado=1;
    //     $cliente->save();

    //     return redirect()->route('clienteIndex')->with('mensaje', 'Registro Exitoso');
    // }

    // public function view($idCliente){
    //     $cliente= Cliente::find($idCliente);
    //     $modulo="Clientes";
    //     $TipoDocumentos=Tipo_Documento::all();
    //     $clientes=Cliente::all();
    //     return view("$modulo.$modulo",compact('modulo','TipoDocumentos','cliente','clientes'));
    // }


    
}
