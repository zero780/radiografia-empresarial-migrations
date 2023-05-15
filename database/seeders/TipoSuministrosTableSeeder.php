<?php

namespace Database\Seeders;

use App\Models\Tipos\Suministro;
use Illuminate\Database\Seeder;

class TipoSuministrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suministro::create([
            'slug' => 'red',
            'nombre' => 'Red',
        ]);
        Suministro::create([
            'slug' => 'captaciones-propias',
            'nombre' => 'Captaciones propias',
        ]);
        Suministro::create([
            'slug' => 'cisternas',
            'nombre' => 'Cisternas',
        ]);
        Suministro::create([
            'slug' => 'otros',
            'nombre' => 'Otros',
        ]);
    }
}
