<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HabitacionesController extends Controller
{
    public function showHabitaciones(){
        $habitacion=DB::table('habitaciones')
        ->join('precio', 'precio_id', '=','precio.id')//precio es la tabla, precio_id es atributo de tabla habitaciones
        ->orderBy('Numero', 'asc')
        ->get();
        return view('servicios.habitaciones',['habitacion'=>$habitacion]);//envia los productos a la vista habitaciones
    }

}

