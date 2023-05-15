<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas12B1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_12_b1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');
            
            $table->boolean('ha_desarrollado_diagnostico')->nullable();  
            $table->boolean('lleva_tareas')->nullable();  
            $table->boolean('ha_desarrollado_innovacion')->nullable();  

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
        Schema::dropIfExists('Rad__respuestas_12_b1');
    }
}
