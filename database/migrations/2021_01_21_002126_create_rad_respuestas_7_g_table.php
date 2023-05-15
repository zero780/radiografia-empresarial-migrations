<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas7GTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_7_g', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('comunicacion_interna')->default(0);
            $table->boolean('seleccion_personal')->default(0);
            $table->boolean('gestion_competencias')->default(0);
            $table->boolean('evaluacion_formacion')->default(0);
            $table->boolean('evaluacion_desempeno')->default(0);
            $table->boolean('igualdad_oportunidades')->default(0);
            $table->boolean('descripcion_puestos')->default(0);
            $table->boolean('clima_laboral')->default(0);
            $table->boolean('competencia_liderazgo')->default(0);
            $table->boolean('otros')->default(0);
            
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
        Schema::dropIfExists('Rad_respuestas_7_g');
    }
}
