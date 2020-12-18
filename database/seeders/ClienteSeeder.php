<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas


class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert(
                ['DNI'=>'8908708907',
                'nombres'=>'Juan Luciano Perez',
                'genero'=>'M',
                'Domicilio'=> 'Cra 7 No 21-4',
                'Telefono'=>'314567895',
                'foto'=> '1.jpg',
                ]);
        DB::table('clientes')->insert(
                ['DNI'=>'1085922345',
                'nombres'=>'Rodrigo Hernan Bastidas',
                'genero'=>'M',
                'Domicilio'=> 'Calle 24A No 3-45',
                'Telefono'=>'320567004',
                'foto'=> '2.jpg',
                ]);
        DB::table('clientes')->insert(
                ['DNI'=>'9403263456',
                'nombres'=>'Maria Monica Garrido',
                'genero'=>'F',
                'Domicilio'=> 'Cra 24 No 11-5',
                'Telefono'=>'350987002',
                'foto'=> '3.jpg',
                ]); 
        DB::table('clientes')->insert(
                ['DNI'=>'1087650098',
                'nombres'=>'Sonia Beatriz Tutalcha',
                'genero'=>'F',
                'Domicilio'=> 'Cra 1 No 0-24',
                'Telefono'=>'311897654',
                'foto'=> '4.jpg',
                ]);
        DB::table('clientes')->insert(
                ['DNI'=>'1076509876',
                'nombres'=>'Lorena Sofia Montenegro',
                'genero'=>'F',
                'Domicilio'=> 'Cra 3 No 4-7',
                'Telefono'=>'301455678',
                'foto'=> '5.jpg',
                ]);
    }
}
