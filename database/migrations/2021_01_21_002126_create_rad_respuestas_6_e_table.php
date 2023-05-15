<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas6ETable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rad__respuestas_6_e', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->nullable()->constrained('core__grupos');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('abrir_mercados_int')->default(false);
            $table->longText('cuales_mercados_int')->nullable();

            $table->boolean('int_exportacion')->default(false);
            $table->boolean('int_implantacion_comercial')->default(false);
            $table->boolean('int_implantacion_productiva')->default(false);
            $table->boolean('int_importacion')->default(false);

            $table->boolean('zona_sudamerica')->default(false);
            $table->boolean('zona_centroamerica')->default(false);
            $table->boolean('zona_caribe')->default(false);
            $table->boolean('zona_norteamerica')->default(false);
            $table->boolean('zona_europa')->default(false);
            $table->boolean('zona_africa')->default(false);
            $table->boolean('zona_asia')->default(false);
            $table->boolean('zona_oceania')->default(false);

            $table->longText('cuales_paises')->nullable();
            $table->longText('cuales_sectores')->nullable();

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
        Schema::dropIfExists('rad__respuestas_6_e');
    }
}
