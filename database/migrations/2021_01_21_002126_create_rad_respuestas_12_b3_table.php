<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas12B3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_12_b3', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');
            
            $table->boolean('interesado_vigilancia')->nullable(); 
            $table->boolean('tipo_sectorial')->default(0); 
            $table->boolean('tipo_estudios')->default(0); 
            $table->boolean('tipo_mercado')->default(0); 
            $table->boolean('tipo_clientes')->default(0); 
            $table->boolean('tipo_competencia')->default(0); 
            $table->boolean('tipo_tecnologia')->default(0); 
            $table->boolean('tipo_ayudas')->default(0); 
            $table->boolean('tipo_normativas')->default(0); 
            $table->boolean('tipo_otras')->default(0); 
            $table->boolean('interesado_gestion')->nullable(); 

            

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
        Schema::dropIfExists('Rad__respuestas_12_b3');
    }
}
