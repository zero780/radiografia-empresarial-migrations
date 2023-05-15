<?php

namespace Database\Seeders;

use App\Models\Estados\Grupo as EstadoGrupo;
use Illuminate\Database\Seeder;

class EstadosGruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoGrupo::create([
            'slug' => 'pending',
            'nombre' => 'Pendiente',
            'descripcion' => 'Creado por un supervisor, pero pendiente de aprobación por un representante.',
        ]);
        EstadoGrupo::create([
            'slug' => 'approved',
            'nombre' => 'Aprobado',
            'descripcion' => 'Creado por un supervisor, aprobado por un representante y habilitado para radiografiar.',
        ]);
        EstadoGrupo::create([
            'slug' => 'denied',
            'nombre' => 'Rechazado',
            'descripcion' => 'Creado por un supervisor, pero rechazado por un representante.',
        ]);
        EstadoGrupo::create([
            'slug' => 'closed',
            'nombre' => 'Finalizado',
            'descripcion' => 'Creado por un supervisor, aprobado por un representante y finalizado en sus labores.',
        ]);
    }
}
