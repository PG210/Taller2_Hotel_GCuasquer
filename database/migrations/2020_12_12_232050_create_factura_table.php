<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('CodigoF');
            $table->unsignedBigInteger('Numero');//atributo para referenciar 
            $table->foreign('Numero')->references('Numero')->on('habitaciones');
            $table->unsignedBigInteger('cliente');//atributo para referenciar 
            $table->foreign('cliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('formaPago');//atributo para referenciar a categoria
            $table->foreign('formaPago')->references('id')->on('formaPago');
            $table->dateTime('Entrada');
            $table->dateTime('Salida');
            $table->double('Total');
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
        Schema::dropIfExists('facturas');
    }
}
