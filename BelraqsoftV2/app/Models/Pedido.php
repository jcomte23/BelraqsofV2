<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = "pedidos";
    protected $guarded= [];

    // public function unionExistencia(){
    //     return $this->belongsTo(Existencia::class,'existencias');
    // }
}
