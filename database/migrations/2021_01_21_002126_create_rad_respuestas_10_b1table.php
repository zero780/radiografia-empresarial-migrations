<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas10B1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_10_b1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('entiende_cooperacion')->nullable();
            $table->boolean('marketing_acuerdos')->default(0);
            $table->boolean('marketing_redes')->default(0);
            $table->boolean('marketing_consorcio')->default(0);
            $table->boolean('marketing_estudios')->default(0);
            $table->boolean('marketing_acciones')->default(0);
            $table->boolean('marketing_intercambio')->default(0);
            $table->boolean('marketing_otros')->default(0);
            $table->longText('marketing_cuales_otros')->nullable();
            
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
        Schema::dropIfExists('Rad_respuestas_10_b1');
    }
}
