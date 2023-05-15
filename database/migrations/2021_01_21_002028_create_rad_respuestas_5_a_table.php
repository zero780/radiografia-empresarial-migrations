<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas5ATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rad__respuestas_5_a', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->nullable()->constrained('core__grupos');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('existe_definicion')->nullable()->comment('Existe un sistema para definir la estrategia de la empresa');
            $table->boolean('existe_plan')->nullable()->comment('Existe un Plan Comercial y/o se planifican anualmente las actuaciones y objetivos comerciales');
            $table->boolean('existe_interes')->nullable()->comment('Estaria realmente interesado en poner en marcha acciones dirigidas a mejorar la Eficiencia Comercial de su empresa');

            $table->boolean('cv_comercial_propio')->default(false);
            $table->boolean('cv_comercial_multiproducto')->default(false);
            $table->boolean('cv_distribuidor')->default(false);
            $table->boolean('cv_comisionista')->default(false);
            $table->boolean('cv_venta_directa')->default(false);
            $table->boolean('cv_networking')->default(false);
            $table->boolean('cv_telemarketing')->default(false);
            $table->boolean('cv_venta_online')->default(false);

            $table->boolean('rc_web')->default(false);
            $table->boolean('rc_web_traducida')->default(false);
            $table->boolean('rc_videos')->default(false);
            $table->boolean('rc_catalogos')->default(false);
            $table->boolean('rc_mkt_digital')->default(false);
            $table->boolean('rc_posicionamiento_web')->default(false);
            $table->boolean('rc_ferias')->default(false);
            $table->boolean('rc_otros')->default(false);

            $table->boolean('existe_fidelizacion')->nullable();
            $table->longText('cuales_fidelizacion')->nullable();

            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rad__respuestas_5_a');
    }
}
