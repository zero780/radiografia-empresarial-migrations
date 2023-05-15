<?php

namespace Database\Seeders;

use App\Models\Tipos\Respuesta as TipoRespuesta;
use Illuminate\Database\Seeder;

class TipoRespuestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoRespuesta::create([
            'slug' => 'multiple',
            'nombre' => 'Múltiple',
            'descripcion' => 'Acepta varias respuestas para un mismo tópico.',
        ]);
        TipoRespuesta::create([
            'slug' => 'unica',
            'nombre' => 'Única',
            'descripcion' => 'Acepta solo una respuesta para un mismo tópico.',
        ]);
    }
}
