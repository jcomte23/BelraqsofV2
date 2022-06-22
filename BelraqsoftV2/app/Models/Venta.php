<?php

namespace App\Models;

use App\Models\Cliente;
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


}
