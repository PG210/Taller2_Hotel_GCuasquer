<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;//interacciones con las consultas

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facturas')->insert(
            ['Numero'=>1,
            'cliente'=>1,
            'formaPago'=>1,
            'Entrada'=>"2020-12-12",
            'Salida'=>"2020-12-14",
            'Total'=>50000,
            ]);
            DB::table('facturas')->insert(
                ['Numero'=>1,
               'cliente'=>2,
               'formaPago'=>1,
               'Entrada'=>"2020-12-13",
               'Salida'=>"2020-12-14",
               'Total'=>25000,
               ]);
           DB::table('facturas')->insert(
               ['Numero'=>2,
               'cliente'=>3,
               'formaPago'=>2,
               'Entrada'=>"2020-12-14",
               'Salida'=>"2020-12-15",
               'Total'=>50000,
               ]);
        DB::table('facturas')->insert(
               ['Numero'=>4,
               'cliente'=>5,
               'formaPago'=>3,
               'Entrada'=> "2020-12-14",
               'Salida'=>"2020-12-15",
               'Total'=>120000,
               ]);
       DB::table('facturas')->insert(
               ['Numero'=>5,
               'cliente'=>1,
               'formaPago'=>1,
               'Entrada'=>"2020-12-13",
               'Salida'=>"2020-12-14",
               'Total'=>250000,
               ]);

    }
}
