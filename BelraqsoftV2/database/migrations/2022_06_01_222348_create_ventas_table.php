<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo',25);
            $table->date('Fecha')->nullable();//fecha puede ser opcional
            $table->unsignedBigInteger('Cliente');
            $table->integer('CantidadProductos');
            $table->double('Total');
            $table->boolean('Estado')->default(true);
            $table->foreign('Cliente')->references('id')->on('clientes');
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
        Schema::dropIfExists('ventas');
    }
};
