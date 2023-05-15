<?php

namespace Database\Seeders;

use App\Models\Tipos\Cualificaciones as TipoCualificaciones;
use Illuminate\Database\Seeder;

class TipoCualificacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoCualificaciones::create([
            'nombre'=> 'Primaria',
            'slug'=> 'primaria',
            
        ]);
        TipoCualificaciones::create([
            'nombre'=> 'Segundaria',
            'slug'=> 'segundaria',
            
        ]);

        TipoCualificaciones::create([
            'nombre'=> 'Superior/Universitaria',
            'slug'=> 'superior',
            
        ]);

        TipoCualificaciones::create([
            'nombre'=> 'Post Grado',
            'slug'=> 'postgrado',
            
        ]);

               
    }
    
}
