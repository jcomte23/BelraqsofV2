<?php

namespace Database\Seeders;


use App\Models\Venta;
use App\Models\Cliente;
use App\Models\Proveedor;
use App\Models\Existencia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\TipoDocumentoSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('tipo_documento')->truncate();
        DB::table('clientes')->truncate();
        DB::table('proveedores')->truncate();
        DB::table('existencias')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $this->call(TipoDocumentoSeeder::class);
        Cliente::factory(50)->create();
        Proveedor::factory(50)->create();
        Existencia::factory(15)->create();
        Venta::factory(50)->create();
    }
}
