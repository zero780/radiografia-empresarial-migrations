<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas8ATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_8_a', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('dispone_internet')->nullable();
            $table->boolean('posee_pagina_web')->nullable();
            $table->boolean('gustaria_disponer_pagina')->nullable();
            $table->boolean('resulta_interesante')->nullable();
            $table->boolean('valora_learning')->nullable();
            $table->boolean('tiene_presencia_redes')->nullable();
            $table->boolean('presencia_facebook')->default(0);
            $table->boolean('presencia_twitter')->default(0);
            $table->boolean('presencia_linkedin')->default(0);
            $table->boolean('presencia_flicker')->default(0);
            $table->boolean('presencia_skype')->default(0);
            $table->boolean('presencia_youtube')->default(0);

            $table->longText('que_area')->nullable();
            $table->longText('que_recursos')->nullable();
            
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
        Schema::dropIfExists('Rad_respuestas_8_a');
    }
}
