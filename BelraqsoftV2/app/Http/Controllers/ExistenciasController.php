<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Existencia;

class ExistenciasController extends Controller
{
    public function index(){
        $modulo="Existencias";
        $existencias=Existencia::paginate(10);
        return view("$modulo.$modulo",compact('modulo'),['existencias'=>$existencias]);
    }
}
