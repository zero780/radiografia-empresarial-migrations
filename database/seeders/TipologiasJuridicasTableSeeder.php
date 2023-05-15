<?php

namespace Database\Seeders;

use App\Models\Tipos\TipologiaJuridica;
use Illuminate\Database\Seeder;

class TipologiasJuridicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipologiaJuridica::create([
            'slug' => 'sociedad-anonima',
            'nombre' => 'Sociedad Anónima',
        ]);
        TipologiaJuridica::create([
            'slug' => 'compania-limitada',
            'nombre' => 'Compañía Limitada',
        ]);
        TipologiaJuridica::create([
            'slug' => 'otro',
            'nombre' => 'Otro',
        ]);
    }
}
