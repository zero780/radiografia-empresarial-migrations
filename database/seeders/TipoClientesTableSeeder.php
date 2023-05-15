<?php

namespace Database\Seeders;

use App\Models\Tipos\Cliente;
use Illuminate\Database\Seeder;

class TipoClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'slug' => 'empresa-privada',
            'nombre' => 'Empresa privada',
        ]);
        Cliente::create([
            'slug' => 'empresa-publica',
            'nombre' => 'Empresa pública',
        ]);
        Cliente::create([
            'slug' => 'empresa-mixta',
            'nombre' => 'Empresa pública y privada',
        ]);
        Cliente::create([
            'slug' => 'general',
            'nombre' => 'Público en general',
        ]);
    }
}
