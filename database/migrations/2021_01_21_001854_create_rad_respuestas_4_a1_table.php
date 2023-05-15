<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas4A1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rad__respuestas_4_a1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->nullable()->constrained('core__grupos');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->double('tam_despachos', 8, 4)->default(0);
            $table->foreignId('id_frecuencia_despachos')->constrained('tipo__frecuencias');
            $table->double('tam_recepciones', 8, 4)->default(0);
            $table->foreignId('id_frecuencia_recepciones')->constrained('tipo__frecuencias');

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
        Schema::dropIfExists('rad__respuestas_4_a1');
    }
}
