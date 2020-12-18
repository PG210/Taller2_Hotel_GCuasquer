<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas


class HabitacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('habitaciones')->insert(
            ['Numero'=>1,
            'descripcion'=>'Una habitación asignada a una persona. El tamaño de la habitación es generalmente de 30 a 40 metros cuadrados',
            'numCamas'=>1,
            'foto'=>'c1.jpg',
            'precio_id'=>1,
            ]);
    DB::table('habitaciones')->insert( 
            ['Numero'=>2,'descripcion'=>'Una habitación asignada a dos personas. El tamaño de la habitación es generalmente de 40 a 45 metros cuadrados ',
            'numCamas'=>2,
            'foto'=>'c2.jpg',
            'precio_id'=>2,
            ]);    
    DB::table('habitaciones')->insert(
            ['Numero'=>3, 'descripcion'=>'una habitación con dos camas dobles. Y puede acomodar de dos a cuatro personas con dos camas individuales',
            'numCamas'=>2,
            'foto'=>'c3.jpg',
            'precio_id'=>3,
            ]);   
    DB::table('habitaciones')->insert( 
             ['Numero'=>4, 'descripcion'=>' Es un salón o sala de estar. Una sala de estar separada',
            'numCamas'=>1,
            'foto'=>'c4.jpg',
            'precio_id'=>4,
             ]);     
    DB::table('habitaciones')->insert(
            ['Numero'=>5, 'descripcion'=>'Habitacion con uno o más dormitorios, una sala de estar bien decorada, los suministros son de alta calidad e incluye servicios personalizados',
            'numCamas'=>2,
            'foto'=>'c5.jpg',
            'precio_id'=>5,
            ]);
    }
}
