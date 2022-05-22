<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tipo_Documento;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1=new Tipo_Documento();
        $tipo1->Abreviatura = 'CC';
        $tipo1->TipoDocumento = 'Cedula de ciudadania';
        $tipo1->save();

        $tipo2=new Tipo_Documento();
        $tipo2->Abreviatura = 'CE';
        $tipo2->TipoDocumento = 'Cedula de extranjeria';
        $tipo2->save();

        $tipo2=new Tipo_Documento();
        $tipo2->Abreviatura = 'PA';
        $tipo2->TipoDocumento = 'Pasaporte';
        $tipo2->save();
    }
}
