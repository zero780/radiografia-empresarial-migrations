<?php

namespace Database\Seeders;

use App\Models\Tipos\Mercado;
use Illuminate\Database\Seeder;

class TipoMercadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mercado::create([
            'slug' => 'local',
            'nombre' => 'Local',
        ]);
        Mercado::create([
            'slug' => 'provincial',
            'nombre' => 'Provincial',
        ]);
        Mercado::create([
            'slug' => 'nacional',
            'nombre' => 'Nacional',
        ]);
        Mercado::create([
            'slug' => 'internacional',
            'nombre' => 'Internacional',
        ]);
    }
}
