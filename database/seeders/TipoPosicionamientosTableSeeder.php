<?php

namespace Database\Seeders;

use App\Models\Tipos\Posicionamiento;
use Illuminate\Database\Seeder;

class TipoPosicionamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posicionamiento::create([
            'slug' => 'muy-bajo',
            'nombre' => 'Muy bajo',
        ]);
        Posicionamiento::create([
            'slug' => 'bajo',
            'nombre' => 'bajo',
        ]);
        Posicionamiento::create([
            'slug' => 'normal',
            'nombre' => 'Normal',
        ]);
        Posicionamiento::create([
            'slug' => 'alto',
            'nombre' => 'Alto',
        ]);
        Posicionamiento::create([
            'slug' => 'muy-alto',
            'nombre' => 'Muy alto',
        ]);
    }
}
