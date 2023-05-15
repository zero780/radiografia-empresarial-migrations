<?php

namespace Database\Seeders;

use App\Models\Tipos\Integrante as TipoIntegrante;
use Illuminate\Database\Seeder;

class TiposIntegrantesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoIntegrante::create([
            'slug' => 'jefe',
            'nombre' => 'Jefe encargado',
            'descripcion' => 'Integrante cabeza del grupo.',
        ]);
        TipoIntegrante::create([
            'slug' => 'miembro',
            'nombre' => 'Miembro normal',
            'descripcion' => 'Integrante normal del grupo.',
        ]);
    }
}
