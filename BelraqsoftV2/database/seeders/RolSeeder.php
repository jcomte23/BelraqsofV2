<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Rol1=new Rol();
        $Rol1->Nombre = 'Administrador';
        $Rol1->save();

        $Rol2=new Rol();
        $Rol2->Nombre = 'Auxiliar';
        $Rol2->save();

        $Rol3=new Rol();
        $Rol3->Nombre = 'Vendedor';
        $Rol3->save();
    }
}
