<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas

class formaPagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formapago')->insert(
            ['descripcion'=>'Efectivo',
            ]);
        DB::table('formapago')->insert(
            ['descripcion'=>'Tarjeta Debito',
            ]);
    DB::table('formapago')->insert(
            ['descripcion'=>'Tarjeta Credito',
            ]);
    }
}
