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
        Schema::create('existencias', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo',25);
            $table->string('Nombre',50);
            $table->string('Descripcion');
            $table->double('ValorUnitario');
            $table->integer('Stock');
            $table->double('PrecioDedal');
            $table->double('PrecioMayor');
            $table->boolean('Estado')->default(true);
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
        Schema::dropIfExists('existencias');
    }
};
