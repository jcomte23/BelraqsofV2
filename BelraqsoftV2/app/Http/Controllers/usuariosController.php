<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Documento;
use App\Models\Usuario;
use App\Models\Rol;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $modulo="Usuarios";
        $TipoDocumentos=Tipo_Documento::all();
        $Roles=Rol::all();
        $usuarios=Usuario::all();
        return view("$modulo.$modulo",compact('modulo','TipoDocumentos','usuarios','Roles'));
    }

    public function create(Request $request){
        $validated = $request->validate([
            'Nombres'=>'required|min:3',
                'Apellidos'=>'required',
                'TipoDocumento'=>'required',
                'Rol'=>'required',
                'Documento'=>'required',
                'Correo'=>'required|email',
                'Telefonos'=>'required',
                'FechaExpedicion'=>'required',
                'Direccion'=>'required',
                'Ciudad_Municipio'=>'required',
                'Estado'=>'required',
        ]);
    
        Usuario::create($validated);
        return redirect()->route('usuarioIndex')->with('RegistroGuardado', 'Registro Exitoso');
        }

        public function update(Usuario $usuario){
            $validated = request()->validate([
                'Nombres'=>'required|min:3',
                'Apellidos'=>'required',
                'TipoDocumento'=>'required',
                'Rol'=>'required',
                'Documento'=>'required',
                'Correo'=>'required|email',
                'Telefonos'=>'required',
                'FechaExpedicion'=>'required',
                'Direccion'=>'required',
                'Ciudad_Municipio'=>'required',
            ]);
        
            $usuario->update($validated);
            return redirect()->route('usuarioIndex')->with('RegistroActualizado', 'Registro actualizado');
        }

        public function delete(Usuario $usuario){
            try {
                $usuario->delete();
                return redirect()->route('usuarioIndex')->with('RegistroEliminado', 'Registro eliminado');
            } catch (\Throwable $th) {
                return redirect()->route('usuarioIndex')->with('ErrorEliminacionRegistro', 'Registro No eliminado');;
            }
        }
        
        public function updateStatus(Usuario $usuario){ 

            if($usuario->Estado==1)
                $usuario->Estado=0;
            else        
                $usuario->Estado=1;
            $usuario->update();
            return redirect()->route('usuarioIndex')->with('EstadoActualizado', 'Estado cambiado');
        }
}

