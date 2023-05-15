<?php

namespace Database\Seeders;

use App\Models\Tipos\Energia;
use Illuminate\Database\Seeder;

class TipoEnergiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Energia::create([
            'slug' => 'electricidad-kwh',
            'nombre' => 'Electricidad (KWH)',
        ]);
        Energia::create([
            'slug' => 'electricidad-mwh',
            'nombre' => 'Electricidad (MWH)',
        ]);
        Energia::create([
            'slug' => 'electricidad-gwh',
            'nombre' => 'Electricidad (GWH)',
        ]);
        Energia::create([
            'slug' => 'electricidad-usd',
            'nombre' => 'Electricidad (USD $)',
        ]);
        Energia::create([
            'slug' => 'gasolina-extra-galon',
            'nombre' => 'Gasolina Extra (Galón)',
        ]);
        Energia::create([
            'slug' => 'gasolina-extra-usd',
            'nombre' => 'Gasolina Extra (USD $)',
        ]);
        Energia::create([
            'slug' => 'gasolina-super-galon',
            'nombre' => 'Gasolina Súper (Galón)',
        ]);
        Energia::create([
            'slug' => 'gasolina-super-usd',
            'nombre' => 'Gasolina Súper (USD $)',
        ]);
        Energia::create([
            'slug' => 'diesel-galon',
            'nombre' => 'Diésel (Galón)',
        ]);
        Energia::create([
            'slug' => 'diesel-usd',
            'nombre' => 'Diésel (USD $)',
        ]);
        Energia::create([
            'slug' => 'gas-kg',
            'nombre' => 'Gas Natural (KG)',
        ]);
        Energia::create([
            'slug' => 'gas-usd',
            'nombre' => 'Gas Natural (USD $)',
        ]);
        Energia::create([
            'slug' => 'otro-gls',
            'nombre' => 'Otro (GLS)',
        ]);
        Energia::create([
            'slug' => 'otro-usd',
            'nombre' => 'Otro (USD $)',
        ]);
    }
}
