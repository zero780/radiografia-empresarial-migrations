<?php

namespace Database\Seeders;

use App\Models\Tipos\AreaCompania as TipoAreaCompania;
use Illuminate\Database\Seeder;

class TipoAreaCompaniaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAreaCompania::create([
            'nombre'=> 'Informática y SI (TIC)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Producción y Desarrollo (PYD)',
            
        ]);

        TipoAreaCompania::create([
            'nombre'=> 'Recursos Humanos (RRHH)',
        ]);

        TipoAreaCompania::create([
            'nombre'=> 'Administración (AD)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Dirección y Estrategia (DYE)',
            
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'I+D+i (IDI)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Compras (CMP)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Marketing, Comunicación y Promoción (MKT)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Logística (L)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Comercialización y Mercado (CM)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Calidad, prevención y medioambiente (CPM)',
        ]);
        TipoAreaCompania::create([
            'nombre'=> 'Otros(O)',
        ]);


               
    }
    
}
