<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas7ATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_7_a', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->foreignId('id_continente')->nullable()->constrained('config__continentes');
            $table->foreignId('id_pais')->nullable()->constrained('config__paises');
            
            $table->double('n_nominal_total',8,4)->nullable();
            $table->double('n_hombres',8,4)->nullable();
            $table->double('n_mujeres',8,4)->nullable();
            $table->double('edad_media_nomina',8,4)->nullable();
            $table->boolean('tiene_plan')->nullable();
            $table->boolean('tiene_necesidad')->nullable();


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
        Schema::dropIfExists('Rad_respuestas_7_a');
    }
}
