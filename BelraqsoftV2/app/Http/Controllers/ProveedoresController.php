<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tipo_Documento;

class ProveedoresController extends Controller
{
    public function index()
    {
        $modulo = "Proveedores";
        $Documentos = Tipo_Documento::all();

        $Proveedores = Proveedor::all();

        return view("$modulo.$modulo", compact('modulo', 'Proveedores', 'Documentos'));
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'NombreRazonSocial' => 'required|min:3',
            'NombreContacto' => 'required',
            'NumeroContacto' => 'required',
            'TipoDocumento' => 'required',
            'NumeroIdenNit' => 'required',
            'Correo' => 'required|email',
            'Telefonos' => 'required',
            'Descripcion' => 'required',
            'Direccion' => 'required',
            'Ciudad_Municipio' => 'required',
            'Estado' => 'required',
        ]);

        Proveedor::create($validated);
        return redirect()->route('proveedorIndex')->with('RegistroGuardado', 'Registro Exitoso');
    }

    public function actualizar(Proveedor $Proveedor)
    {
        $campos = request()->validate([
            'NombreRazonSocial' => 'required|min:3',
            'NombreContacto' => 'required',
            'NumeroContacto' => 'required',
            'TipoDocumento ' => 'required',
            'NumeroIdenNit' => 'required',
            'Correo' => 'required',
            'Telefonos' => 'required',
            'Descripcion' => 'required',
            'Direccion' => 'required',
            'Ciudad_Municipio' => 'required',
            'Estado' => 'required',
        ]);

        $Proveedor->update($campos);
        return redirect()->route('proveedorIndex')->with('RegistroActualizado', 'Proveedor actualizado');
    }

    public function eliminar(Proveedor $Proveedor)
    {
        try {
            $Proveedor->delete();
            return redirect()->route('proveedorIndex')->with('RegistroEliminado', 'Proveedor eliminado');
        } catch (\Throwable $th) {
            return redirect()->route('proveedorIndex')->with('ErrorEliminacionRegistro', 'Proveedor No eliminado');;
        }
    }

    public function actualizarEstado(Proveedor $Proveedor){
        $campo = request()->validate([
                'Estado'=>'required',
        ]);
        $Proveedor->update($campo);
        return redirect()->route('proveedorIndex')->with('EstadoActualizado', 'Estado cambiado');
    }
}
