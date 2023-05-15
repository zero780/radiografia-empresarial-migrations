<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas10B6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_10_b6', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('otro_compartir_infraestructura')->default(0);
            $table->boolean('otro_compartir_servicios')->default(0);
            $table->boolean('otro_otros')->default(0);
            $table->longText('otro_cuales_otros')->nullable();


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
        Schema::dropIfExists('Rad_respuestas_10_b6');
    }
}
