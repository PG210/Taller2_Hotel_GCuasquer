<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function getindex(){//retorna la vista o interactua con el modelo de datos
        return view('principal');//vista principal
    }
    public function showHistoria(){
        return view('hotel.historia');

    }
    public function showMision(){
        return view('hotel.vision');
    }
    public function showUbicacion(){
        return view('hotel.ubicacion');
    }
    public function showContactos(){
        return view('contacto');
    }
    public function showconsulta(){
       $dat = DB::table('precio')->where('Tipo', '=', 'Sencilla')->count();
       $dat1 = DB::table('precio')->where('Tipo', '=', 'Doble')->count();
       $dat2 = DB::table('precio')->where('Tipo', '=', 'Cuadruples')->count();
       $dat3 = DB::table('precio')->where('Tipo', '=', 'Suite')->count();
       $dat4 = DB::table('precio')->where('Tipo', '=', 'Gran Suite')->count();

       //1
       $datos = DB::table('reservas')
       ->where('Salida')
       ->join('clientes', 'cliente', '=', 'clientes.id')
       ->join('habitaciones', 'reservas.numero', '=', 'habitaciones.Numero')
       ->join('precio', 'precio_id', '=', 'precio.id')
       ->get();

       return view('consultas',['datos'=>$datos, 'dat'=>$dat, 'dat1'=>$dat1, 'dat2'=>$dat2, 'dat3'=>$dat3, 'dat4'=>$dat4]);
    }
    
   
    
}
