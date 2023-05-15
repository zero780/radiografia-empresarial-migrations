<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas6B1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rad__respuestas_6_b1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->nullable()->constrained('core__grupos');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('inter_iniciativa_propia')->default(false);
            $table->boolean('inter_clientes')->default(false);
            $table->boolean('inter_otros')->default(false);
            $table->longText('cuales_otros')->nullable();

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
        Schema::dropIfExists('rad__respuestas_6_b1');
    }
}
