<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table="usuarios";
    protected $guarded= [];

    public function unionTipoDoc(){
        return $this->belongsTo(tipo_documento::class,'TipoDocumento');
    }

    public function unionRol(){
        return $this->belongsTo(Rol::class,'Rol');
    }
}
