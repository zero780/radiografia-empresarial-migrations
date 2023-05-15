<?php

namespace Database\Seeders;

use App\Models\Tipos\Importancia;
use Illuminate\Database\Seeder;

class TipoImportanciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Importancia::create([
            'slug' => 'poco-importante',
            'nombre' => 'Poco importante',
        ]);
        Importancia::create([
            'slug' => 'importante',
            'nombre' => 'Importante',
        ]);
        Importancia::create([
            'slug' => 'muy-importante',
            'nombre' => 'Muy importante',
        ]);
    }
}
