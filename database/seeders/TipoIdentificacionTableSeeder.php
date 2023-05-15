<?php

namespace Database\Seeders;

use App\Models\Tipos\Identificacion as TipoIdentificacion;
use Illuminate\Database\Seeder;

class TipoIdentificacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoIdentificacion::create([
            'slug' => 'ruc',
            'nombre' => 'RUC',
            'descripcion' => 'Registro Único Tributario'
        ]);
        TipoIdentificacion::create([
            'slug' => 'cedula',
            'nombre' => 'Cédula',
            'descripcion' => 'Cédula de identidad'
        ]);
    }
}
