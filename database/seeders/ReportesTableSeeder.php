<?php

namespace Database\Seeders;

use App\Models\Tipos\Reporte;
use Illuminate\Database\Seeder;

class ReportesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reporte::create([
            'slug' => 'reportes-01',
            'nombre' => 'Radiografias',
            'url' => '/api/reportes/reportes-01',
            'nombre_archivo' => 'Reporte__Radiografias',
            'componente' => 'ReporteRadiografiasScreen',
            'orden' => 2
        ]);
        Reporte::create([
            'slug' => 'reportes-02',
            'nombre' => 'Organizaciones registradas',
            'url' => '/api/reportes/reportes-02',
            'nombre_archivo' => 'Reporte__Organizaciones',
            'componente' => 'ReporteOgranizacionesScreen',
            'orden' => 1
        ]);
        Reporte::create([
            'slug' => 'reportes-03',
            'nombre' => 'Datos de contacto de organizaciones',
            'url' => '/api/reportes/reportes-03',
            'nombre_archivo' => 'Reporte__DatosDeContacto',
            'componente' => 'ReporteDatosContactoOrganizacionScreen',
            'orden' => 3
        ]);
    }
}
