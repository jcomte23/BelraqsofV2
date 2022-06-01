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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombres',50);
            $table->string('Apellidos',50);
            $table->unsignedBigInteger('TipoDocumento');
            $table->string('Documento',15);
            $table->string('Correo',100)->nullable();//correo puede ser opcional
            $table->string('Telefonos',40);
            $table->date('FechaNacimiento')->nullable();//fecha puede ser opcional
            $table->string('Direccion');
            $table->string('Ciudad_Municipio',50);
            $table->boolean('Estado')->default(true);
            $table->foreign('TipoDocumento')->references('id')->on('tipo_documento');
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
        Schema::dropIfExists('clientes');
    }
};
