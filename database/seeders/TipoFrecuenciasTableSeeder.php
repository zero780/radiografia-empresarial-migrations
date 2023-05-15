<?php

namespace Database\Seeders;

use App\Models\Tipos\Frecuencia;
use Illuminate\Database\Seeder;

class TipoFrecuenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Frecuencia::create([
            'slug' => 'diario',
            'nombre' => 'Diario',
        ]);
        Frecuencia::create([
            'slug' => 'semanal',
            'nombre' => 'Semanal',
        ]);
        Frecuencia::create([
            'slug' => 'mensual',
            'nombre' => 'Mensual',
        ]);
        Frecuencia::create([
            'slug' => 'anual',
            'nombre' => 'Anual',
        ]);
        Frecuencia::create([
            'slug' => 'otro',
            'nombre' => 'Otro',
        ]);
    }
}
