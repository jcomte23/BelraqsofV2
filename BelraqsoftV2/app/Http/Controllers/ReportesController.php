<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function index(){
        $modulo="Reportes";
        return view("$modulo.$modulo",compact('modulo'));
    }
}
