<?php

namespace Database\Seeders;

use App\Models\Tipos\Aumento as TipoAumento;
use Illuminate\Database\Seeder;

class TipoAumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAumento::create([
            'nombre'=> 'Ha aumentado',
            'slug'=> 'ha-aumentado',
            
        ]);
        TipoAumento::create([
            'nombre'=> 'Ha disminuido',
            'slug'=> 'ha-disminuido',
            
        ]);

        TipoAumento::create([
            'nombre'=> 'No ha sufrido cambios',
            'slug'=> 'no-cambios',
            
        ]);

        TipoAumento::create([
            'nombre'=> 'No sabe/No contesta',
            'slug'=> 'no-contesta',
            
        ]);

               
    }
    
}
