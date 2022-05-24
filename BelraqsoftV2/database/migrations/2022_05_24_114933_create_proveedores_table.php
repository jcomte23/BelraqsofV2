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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('NombreRazonSocial',50);
            $table->string('NombreContacto',80);
            $table->string('NumeroContacto',40);
            $table->unsignedBigInteger('TipoDocumento');
            $table->string('NumeroIdenNit',25);
            $table->string('Correo',100)->nullable();//correo puede ser opcional
            $table->string('Telefono(s)',40);
            $table->string('Descripcion');
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
        Schema::dropIfExists('proveedores');
    }
};
