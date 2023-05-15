<?php

namespace Database\Seeders;

use App\Models\Auth\Usuario;
use App\Models\Core\UsuarioByVinculo;
use App\Models\Core\Vinculo;
use Illuminate\Database\Seeder;

class VinculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $representante = Usuario::where('email', 'representante@espol.edu.ec')->firstOrFail();


        $vinculo = Vinculo::create([
            'nombre' => 'Pasantías comunitarias',
        ]);
        UsuarioByVinculo::create([
            'id_vinculo' => $vinculo->id,
            'id__usuario' => $representante->id,
        ]);

        $vinculo = Vinculo::create([
            'nombre' => 'Pasantías empresariales',
        ]);
        UsuarioByVinculo::create([
            'id_vinculo' => $vinculo->id,
            'id__usuario' => $representante->id,
        ]);

        $vinculo = Vinculo::create([
            'nombre' => 'Proyecto de investigación',
        ]);
        UsuarioByVinculo::create([
            'id_vinculo' => $vinculo->id,
            'id__usuario' => $representante->id,
        ]);

        $vinculo = Vinculo::create([
            'nombre' => 'Proyecto integrador',
        ]);
        UsuarioByVinculo::create([
            'id_vinculo' => $vinculo->id,
            'id__usuario' => $representante->id,
        ]);

        $vinculo = Vinculo::create([
            'nombre' => 'Servicios prestados',
        ]);
        UsuarioByVinculo::create([
            'id_vinculo' => $vinculo->id,
            'id__usuario' => $representante->id,
        ]);
    }
}
