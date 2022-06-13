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
        return redirect()->route('proveedorIndex')->with('mensaje', 'Registro Exitoso');
    }

    public function actualizar(Proveedor $proveedor)
    {
        $campos = request()->validate([
            'NombreRazonSocial' => 'required|min:3',
            'NombreContacto' => 'required',
            'NumeroContacto' => 'required',
            'TipoDocumento ' => 'required',
            'NumeroIdenNit' => 'required|email',
            'Correo' => 'required',
            'Telefonos' => 'required',
            'Descripcion' => 'required',
            'Direccion' => 'required',
            'Ciudad_Municipio' => 'required',
            'Estado' => 'required',
        ]);

        $proveedor->update($campos);
        return redirect()->route('proveedorIndex')->with('clienteActualizado', 'Cliente actualizado');
    }

    public function eliminar(Proveedor $proveedor)
    {
        try {
            $proveedor->delete();
            return redirect()->route('proveedorIndex')->with('clienteEliminado', 'Cliente eliminado');
        } catch (\Throwable $th) {
            return redirect()->route('proveedorIndex')->with('ErrorEliminacionCliente', 'Cliente No eliminado');;
        }
    }

    public function UpdateStatusNoti(Request $request)
    {

        $NotiUpdate = Proveedor::findOrFail($request->id)->update(['Estado' => $request->Estado]);

        if ($request->estatus == 0) {
            $newStatus = '<br> <button type="button" class="btn btn-sm btn-danger">Inactiva</button>';
        } else {
            $newStatus = '<br> <button type="button" class="btn btn-sm btn-success">Activa</button>';
        }

        return response()->json(['var' => '' . $newStatus . '']);
    }
}
