<?php

namespace Database\Seeders;

use App\Models\Tipos\Respuesta as TipoRespuesta;
use App\Models\Tipos\Seccion;
use App\Models\Tipos\SubSeccion;
use Illuminate\Database\Seeder;

class SeccionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => '',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);*/
        $t_unica = TipoRespuesta::where('slug', 'unica')->firstOrFail();
        $t_multiple = TipoRespuesta::where('slug', 'multiple')->firstOrFail();
        $seccion = Seccion::create([
            'orden' => 1,
            'slug' => '01-contacto',
            'nombre' => 'DATOS DE CONTACTO DE LA EMPRESA',
            'componente' => 'RadiografiaPagina01Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_unica->id,
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        $seccion = Seccion::create([
            'orden' => 2,
            'slug' => '02-actividad',
            'nombre' => 'DESCRIPCIÓN DE LA EMPRESA Y SU ACTIVIDAD',
            'componente' => 'RadiografiaPagina02Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_unica->id,
            'nombre' => 'Datos descriptivos',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_multiple->id,
            'nombre' => 'Actividades principales que desarrolla',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_multiple->id,
            'nombre' => 'Actividades secundarias que desarrolla',
            'url' => 'https://www.google.com.ec/',
            'orden' => 3,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_multiple->id,
            'nombre' => 'Productos y servicios ',
            'url' => 'https://www.google.com.ec/',
            'orden' => 4,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_multiple->id,
            'nombre' => 'Patentes o marcas registradas (I)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 5,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_multiple->id,
            'nombre' => 'Patentes o marcas registradas (II)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 6,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_multiple->id,
            'nombre' => 'Mercado geográfico',
            'url' => 'https://www.google.com.ec/',
            'orden' => 7,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_unica->id,
            'nombre' => 'Cliente',
            'descripcion' => 'Anote su principal cliente.',
            'url' => 'https://www.google.com.ec/',
            'orden' => 8,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_unica->id,
            'nombre' => 'Proveedores',
            'url' => 'https://www.google.com.ec/',
            'orden' => 9,
        ]);
        SubSeccion::create([
            'id_seccion' => $seccion->id,
            'id_tipo_respuesta' => $t_unica->id,
            'nombre' => 'Competencia y Posicionamiento',
            'url' => 'https://www.google.com.ec/',
            'orden' => 10,
        ]);
        $seccion = Seccion::create([
            'orden' => 3,
            'slug' => '03-competitividad',
            'nombre' => 'COMPETITIVIDAD',
            'componente' => 'RadiografiaPagina03Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Factores de competitividad',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'FODA',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        $seccion = Seccion::create([
            'orden' => 4,
            'slug' => '04-infraestructura',
            'nombre' => 'INFRAESTRUCTURA',
            'componente' => 'RadiografiaPagina04Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Necesidades logísticas (I)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Necesidades logísticas (II)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Necesidades energéticas (I)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 3,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Necesidades energéticas (II)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 4,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Otras infraestructuras: Agua',
            'url' => 'https://www.google.com.ec/',
            'orden' => 5,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Otras infraestructuras: Alcantarillado',
            'url' => 'https://www.google.com.ec/',
            'orden' => 6,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Otras infraestructuras: Otros residuos',
            'url' => 'https://www.google.com.ec/',
            'orden' => 7,
        ]);
        $seccion = Seccion::create([
            'orden' => 5,
            'slug' => '05-estrategia',
            'nombre' => 'ESTRATEGIA COMERCIAL',
            'componente' => 'RadiografiaPagina05Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        $seccion = Seccion::create([
            'orden' => 6,
            'slug' => '06-internacionalizacion',
            'nombre' => 'INTERNACIONALIZACIÓN',
            'componente' => 'RadiografiaPagina06Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Análisis de la situación actual de la empresa respecto a la internacionalización',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Si se trata de una empresa internacionalizada… (I)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Si se trata de una empresa internacionalizada… (II)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 3,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => '¿A qué lugares usted exporta?',
            'url' => 'https://www.google.com.ec/',
            'orden' => 4,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Evolución de las ventas y clientes internacionales en los últimos 3 años',
            'url' => 'https://www.google.com.ec/',
            'orden' => 5,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Si se trata de una empresa no internacionalizada…',
            'url' => 'https://www.google.com.ec/',
            'orden' => 6,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Ferias, convenciones y misiones comerciales',
            'url' => 'https://www.google.com.ec/',
            'orden' => 7,
        ]);
        $seccion = Seccion::create([
            'orden' => 7,
            'slug' => '07-rrhh',
            'nombre' => 'RECURSOS HUMANOS',
            'componente' => 'RadiografiaPagina07Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Configuración de la plantilla (NÓMINA)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Estructura departamental y responsables',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Igualdad y conciliación',
            'url' => 'https://www.google.com.ec/',
            'orden' => 3,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Evolución de la NÓMINA',
            'url' => 'https://www.google.com.ec/',
            'orden' => 4,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Responsabilidad Social Corporativa',
            'url' => 'https://www.google.com.ec/',
            'orden' => 5,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Formación',
            'url' => 'https://www.google.com.ec/',
            'orden' => 6,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Otros',
            'url' => 'https://www.google.com.ec/',
            'orden' => 7,
        ]);
        $seccion = Seccion::create([
            'orden' => 8,
            'slug' => '08-tecnologia',
            'nombre' => 'TECNOLOGÍA',
            'componente' => 'RadiografiaPagina08Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Internet',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Tecnología empleada',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_multiple->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Maquinaria y Tecnología empleada en el proceso productivo que suponga un hecho diferencial para la empresa',
            'url' => 'https://www.google.com.ec/',
            'orden' => 3,
        ]);
        $seccion = Seccion::create([
            'orden' => 9,
            'slug' => '09-calidad',
            'nombre' => 'CALIDAD, PREVENCIÓN DE RIESGOS Y MEDIO AMBIENTE',
            'componente' => 'RadiografiaPagina09Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Certificaciones y homologaciones',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Sostenibilidad',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        $seccion = Seccion::create([
            'orden' => 10,
            'slug' => '10-cooperacion',
            'nombre' => 'COOPERACIÓN EMPRESARIAL',
            'componente' => 'RadiografiaPagina10Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        $seccion = Seccion::create([
            'orden' => 11,
            'slug' => '11-finanzas',
            'nombre' => 'DATOS FINANCIEROS',
            'componente' => 'RadiografiaPagina11Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Situación actual',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Inversiones previstas',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        $seccion = Seccion::create([
            'orden' => 12,
            'slug' => '12-innovacion',
            'nombre' => 'INOVACIÓN Y MEJORA COMPETITIVA',
            'componente' => 'RadiografiaPagina12Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Situación actual de la empresa',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Logística y producción',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
        $seccion = Seccion::create([
            'orden' => 13,
            'slug' => '13-subvenciones',
            'nombre' => 'SUBVENCIONES Y OTROS PROGRAMAS DE APOYO A LA PYME',
            'componente' => 'RadiografiaPagina13Screen',
            'url' => 'https://www.google.com.ec/'
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Programas de subvenciones y ayudas públicas de carácter general (I)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 1,
        ]);
        SubSeccion::create([
            'id_tipo_respuesta' => $t_unica->id,
            'id_seccion' => $seccion->id,
            'nombre' => 'Programas de subvenciones y ayudas públicas de carácter general (Ii)',
            'url' => 'https://www.google.com.ec/',
            'orden' => 2,
        ]);
    }
}
