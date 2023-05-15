<?php

namespace Database\Seeders;

use App\Models\Estados\Radiografia as EstadoRadiografia;
use Illuminate\Database\Seeder;

class EstadosRadiografiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoRadiografia::create([
            'slug' => 'active',
            'nombre' => 'En ejecución',
            'descripcion' => 'Radiografía habilitada para su levantamiento de información.',
        ]);
        EstadoRadiografia::create([
            'slug' => 'disabled',
            'nombre' => 'Finalizada',
            'descripcion' => 'Radiografía deshabilitada para su levantamiento de información.',
        ]);
    }
}
