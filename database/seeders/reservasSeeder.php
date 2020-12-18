<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas

class reservasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservas')->insert(
            ['numero'=>1,
            'cliente'=>2,
            'Entrada'=>"2020-12-13",
            'Salida'=>"2020-12-14",
            ]);
        DB::table('reservas')->insert(
            ['numero'=>2,
            'cliente'=>1,
            'Entrada'=>"2020-12-13",
            ]);
       DB::table('reservas')->insert(
            ['numero'=>3,
            'cliente'=>3,
            'Entrada'=>"2020-12-17",
            ]);
       DB::table('reservas')->insert(
            ['numero'=>4,
            'cliente'=>5,
            'Entrada'=>"2020-12-18",
            ]);
       DB::table('reservas')->insert(
            ['numero'=>5,
            'cliente'=>2,
            'Entrada'=>"2020-12-15",
            'Salida'=>"2020-12-16",
            ]);
    }
}
