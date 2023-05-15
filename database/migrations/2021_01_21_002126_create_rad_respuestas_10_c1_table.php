<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas10C1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_10_c1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->longText('actividades_principales')->nullable();
            $table->boolean('zona_local')->default(0);
            $table->boolean('zona_provincial')->default(0);
            $table->boolean('zona_cantonal')->default(0);
            $table->boolean('zona_indiferente')->default(0);
            $table->boolean('zona_nacional')->default(0);
            $table->boolean('zona_internacional')->default(0);
            $table->boolean('tamaño_10')->default(0);
            $table->boolean('tamaño_10_49')->default(0);
            $table->boolean('tamaño_50_150')->default(0);
            $table->boolean('tamaño_150')->default(0);
            $table->boolean('tamaño_indiferente')->default(0);
            
            $table->boolean('conoce_empresa')->nullable();

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
        Schema::dropIfExists('Rad_respuestas_10_c1');
    }
}
