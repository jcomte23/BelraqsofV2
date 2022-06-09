<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table="clientes";
    // protected $guarded= [];

    public function unionTipoDoc(){
        return $this->belongsTo(tipo_documento::class,'TipoDocumento');
    }
}
