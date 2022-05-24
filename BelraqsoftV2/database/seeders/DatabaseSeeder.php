<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Existencia;
use App\Models\Proveedor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TipoDocumentoSeeder::class);
        Cliente::factory(50)->create();
        Proveedor::factory(50)->create();
        Existencia::factory(50)->create();
    }
}
