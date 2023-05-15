<?php

namespace Database\Seeders;

use App\Models\Tipos\Identificacion as TipoIdentificacion;
use App\Models\Core\Organizacion;
use Illuminate\Database\Seeder;

class OrganizacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo_ruc =  TipoIdentificacion::where('slug', 'ruc')->firstOrFail();

        Organizacion::create([
            'id_tipo_identificacion' => $tipo_ruc->id,
            'identificacion' => '0991327371001',
            'nombre' => 'TELCONET S.A.',
        ]);
        Organizacion::create([
            'id_tipo_identificacion' => $tipo_ruc->id,
            'identificacion' => '1791251237001',
            'nombre' => 'Consorcio Ecuatoriano de Telecomunicaciones S.A. Conecel',
        ]);
        Organizacion::create([
            'id_tipo_identificacion' => $tipo_ruc->id,
            'identificacion' => '1791256115001',
            'nombre' => 'Otecel S.A.',
        ]);
        Organizacion::create([
            'id_tipo_identificacion' => $tipo_ruc->id,
            'identificacion' => '1768152560001',
            'nombre' => 'CORPORACIÓN NACIONAL DE TELECOMUNICACIONES - CNT EP',
        ]);
        Organizacion::create([
            'id_tipo_identificacion' => $tipo_ruc->id,
            'identificacion' => '0991033904001',
            'nombre' => 'Benemerita Sociedad Protectora de La Infancia',
        ]);
    }
}
