<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    public function showClientes(){
        $cliente=DB::table('clientes')
        ->orderBy('nombres', 'asc')//ordena e forma ascendente
        ->get();
        return view('clientes.clientes', ['cliente'=>$cliente]);
    }
}

