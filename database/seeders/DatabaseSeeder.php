<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermisosTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(VinculosTableSeeder::class);
        $this->call(TipoRespuestasTableSeeder::class);
        $this->call(EstadoRespuestasTableSeeder::class);
        $this->call(SeccionesTableSeeder::class);
        $this->call(ReportesTableSeeder::class);
        $this->call(EstadosGruposTableSeeder::class);
        $this->call(TiposIntegrantesTableSeeder::class);
        $this->call(EstadosRadiografiasTableSeeder::class);
        $this->call(TokensByAppTableSeeder::class);
        $this->call(TipoIdentificacionTableSeeder::class);
        $this->call(OrganizacionesTableSeeder::class);
        $this->call(ContinentesTableSeeder::class);
        $this->call(PaisesTableSeeder::class);
        $this->call(DivisionPoliticaEcuadorTableSeeder::class);
        $this->call(TipologiasJuridicasTableSeeder::class);
        $this->call(CIUUsTableSeeder::class);
        $this->call(CPCsTableSeeder::class);
        $this->call(TipoMercadosTableSeeder::class);
        $this->call(TipoFrecuenciasTableSeeder::class);
        $this->call(TipoPosicionamientosTableSeeder::class);
        $this->call(TipoImportanciasTableSeeder::class);
        $this->call(TipoClientesTableSeeder::class);
        $this->call(TipoEnergiasTableSeeder::class);
        $this->call(TipoSuministrosTableSeeder::class);
        $this->call(TipoRespuestaSeccionesTableSeeder::class);
        $this->call(TipoCualificacionesTableSeeder::class);
        $this->call(TipoAumentoTableSeeder::class);
        $this->call(TipoAreaCompaniaTableSeeder::class);
    }
}
