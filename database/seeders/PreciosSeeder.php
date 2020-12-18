<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas


class PreciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   DB::table('precio')->insert(
            ['Tipo'=>'Sencilla',
            'precio'=>25000,
            ]);
    DB::table('precio')->insert(
            ['Tipo'=>'Doble',
            'precio'=>50000,
            ]);
    DB::table('precio')->insert(
            ['Tipo'=>'Cuadruples',
            'precio'=>80000,
            ]);
    DB::table('precio')->insert(
            ['Tipo'=>'Suite',
            'precio'=>120000,
            ]);
    DB::table('precio')->insert(
            ['Tipo'=>'Gran suite',
            'precio'=>250000,
            ]);
    }
}
