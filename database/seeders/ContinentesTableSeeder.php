<?php

namespace Database\Seeders;

use App\Models\Config\Continente;
use Illuminate\Database\Seeder;

class ContinentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Continente::create([
            'nombre' => 'NA',
            'codigo' => 'América del Norte',
            'orden' => 1,
        ]);
        Continente::create([
            'nombre' => 'CA',
            'codigo' => 'América Central',
            'orden' => 2,
        ]);
        Continente::create([
            'nombre' => 'SA',
            'codigo' => 'América del Sur',
            'orden' => 3,
        ]);
        Continente::create([
            'nombre' => 'AS',
            'codigo' => 'Asia',
            'orden' => 4,
        ]);
        Continente::create([
            'nombre' => 'EU',
            'codigo' => 'Europa',
            'orden' => 5,
        ]);
        Continente::create([
            'nombre' => 'OC',
            'codigo' => 'Oceanía',
            'orden' => 6,
        ]);
        Continente::create([
            'nombre' => 'AF',
            'codigo' => 'África',
            'orden' => 7,
        ]);
        Continente::create([
            'nombre' => 'AN',
            'codigo' => 'Antártica',
            'orden' => 8,
        ]);
    }
}
