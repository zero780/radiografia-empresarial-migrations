<?php

namespace Database\Seeders;

use App\Models\Estados\Respuesta as EstadoRespuesta;
use Illuminate\Database\Seeder;

class EstadoRespuestasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoRespuesta::create([
            'slug' => 'edicion',
            'nombre' => 'En edición',
            'descripcion' => 'Respuesta bajo edición de un Grupo de Trabaja, no está sujeta a reportes.',
        ]);
        EstadoRespuesta::create([
            'slug' => 'definitivo',
            'nombre' => 'Definitivo',
            'descripcion' => 'Respuesta definitiva, guardada en la radiografía, sujeta a reportes.',
        ]);
        EstadoRespuesta::create([
            'slug' => 'eliminado',
            'nombre' => 'Eliminado',
            'descripcion' => 'Respuesta eliminada, no sujeta a reportes.',
        ]);
    }
}
