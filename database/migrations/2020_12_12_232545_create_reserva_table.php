<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numero');//atributo para referenciar
            $table->foreign('numero')->references('Numero')->on('habitaciones');
            $table->unsignedBigInteger('cliente');//atributo para referenciar 
            $table->foreign('cliente')->references('id')->on('clientes');
            $table->dateTime('Entrada', $precision = 0);
            $table->dateTime('Salida', $precision = 0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
