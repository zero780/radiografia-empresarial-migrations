<?php

namespace Database\Seeders;

use App\Models\Auth\Rol;
use App\Models\Auth\Permiso;
use App\Models\Auth\PermisoByRol;
use Illuminate\Database\Seeder;

class PermisosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol__admin = Rol::create([
            'slug' => 'administrador',
            'nombre' => 'Administrador',
            'descripcion' => 'Administrador general de las entidades del sistema.',
        ]);
        $rol__representante = Rol::create([
            'slug' => 'representante',
            'nombre' => 'Representante de Vínculo',
            'descripcion' => 'Representante de un vínculo, quien autoriza los grupos de trabajo.',
        ]);
        $rol__supervisor = Rol::create([
            'slug' => 'supervisor',
            'nombre' => 'Supervisor',
            'descripcion' => 'Creador y supervisor de grupos de trabajo.',
        ]);
        $rol__visualizador = Rol::create([
            'slug' => 'visualizador',
            'nombre' => 'Visualizador de reportes',
            'descripcion' => 'Accede a los reportes del sistema.',
        ]);

        // Usuarios
        $permiso = Permiso::create([
            'modelo' => 'Usuario',
            'accion' => 'create',
            'descripcion' => 'Crear nuevo usuario en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Usuario',
            'accion' => 'view',
            'descripcion' => 'Ver datos de usuario en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Usuario',
            'accion' => 'edit',
            'descripcion' => 'Editar usuario en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Usuario',
            'accion' => 'delete',
            'descripcion' => 'Bloquear usuario en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Usuario',
            'accion' => 'list',
            'descripcion' => 'Listar todos los usuarios del sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);

        // Vínculos
        $permiso = Permiso::create([
            'modelo' => 'Vinculo',
            'accion' => 'create',
            'descripcion' => 'Crear nuevo vínculo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Vinculo',
            'accion' => 'view',
            'descripcion' => 'Ver datos de vínculo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Vinculo',
            'accion' => 'edit',
            'descripcion' => 'Editar vínculo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Vinculo',
            'accion' => 'delete',
            'descripcion' => 'Bloquear vínculo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Vinculo',
            'accion' => 'list',
            'descripcion' => 'Listar todos los vínculos del sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);

        // Organizaciones
        $permiso = Permiso::create([
            'modelo' => 'Organizacion',
            'accion' => 'create',
            'descripcion' => 'Crear nueva organizacion en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__representante->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Organizacion',
            'accion' => 'view',
            'descripcion' => 'Ver datos de organizacion en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__representante->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Organizacion',
            'accion' => 'edit',
            'descripcion' => 'Editar organizacion en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__representante->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Organizacion',
            'accion' => 'delete',
            'descripcion' => 'Bloquear organizacion en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__representante->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Organizacion',
            'accion' => 'list',
            'descripcion' => 'Listar todos las organizaciones del sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__admin->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__representante->id,
            'id_permiso' => $permiso->id,
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);

        // Reportes
        $permiso = Permiso::create([
            'modelo' => 'Reporte',
            'accion' => 'view',
            'descripcion' => 'Descargar un reporte del sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__visualizador->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Reporte',
            'accion' => 'list',
            'descripcion' => 'Listar todos los tipos de reportes del sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__visualizador->id,
            'id_permiso' => $permiso->id,
        ]);

        // Grupos de trabajo
        $permiso = Permiso::create([
            'modelo' => 'Grupo',
            'accion' => 'create',
            'descripcion' => 'Crear nuevo grupo de trabajo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Grupo',
            'accion' => 'check',
            'descripcion' => 'Aprobar o rechazar la creación de un grupo de trabajo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__representante->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Grupo',
            'accion' => 'view',
            'descripcion' => 'Ver datos de grupo de trabajo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Grupo',
            'accion' => 'edit',
            'descripcion' => 'Editar grupo de trabajo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Grupo',
            'accion' => 'delete',
            'descripcion' => 'Bloquear grupo de trabajo en el sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
        $permiso = Permiso::create([
            'modelo' => 'Grupo',
            'accion' => 'list',
            'descripcion' => 'Listar todos los grupos de trabajo del sistema.',
        ]);
        PermisoByRol::create([
            'id_rol' => $rol__supervisor->id,
            'id_permiso' => $permiso->id,
        ]);
    }
}
