<?php

namespace Database\Seeders;

use App\Models\Auth\Usuario;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create([
            'nombre' => 'ADMINISTRADOR',
            'email' => 'administrador@espol.edu.ec'
        ]);
        $usuario->addRole('administrador');
        $usuario = Usuario::create([
            'nombre' => 'REPRESENTANTE',
            'email' => 'representante@espol.edu.ec'
        ]);
        $usuario->addRole('representante');
        $usuario = Usuario::create([
            'nombre' => 'SUPERVISOR',
            'email' => 'supervisor@espol.edu.ec'
        ]);
        $usuario->addRole('supervisor');
        $usuario = Usuario::create([
            'nombre' => 'VISUALIZADOR',
            'email' => 'visualizador@espol.edu.ec'
        ]);
        $usuario->addRole('visualizador');
        Usuario::create([
            'nombre' => 'FARFAN JIJON FREDERICK ALEXANDER',
            'email' => 'fafarfan@espol.edu.ec'
        ]);
        Usuario::create([
            'nombre' => 'CAICEDO HERRERA JAIRO PAOLO',
            'email' => 'jaipcaic@espol.edu.ec'
        ]);
    }
}
