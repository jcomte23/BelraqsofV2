<?php

namespace App\Models;

use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;
    protected $table="ventas";
    protected $guarded= [];

    public function unionCliente(){
        return $this->belongsTo(Cliente::class,'Cliente');
    }

    public function unionUsuario(){
        return $this->belongsTo(Usuario::class,'Usuario');
    }

    public function unionTipoDoc(){
        return $this->belongsTo(tipo_documento::class,'TipoDocumento');
    }


}
