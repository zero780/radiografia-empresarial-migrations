<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas9A2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_9_a2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('practica_calidad')->default(0);
            $table->boolean('practica_ambiente')->default(0);
            $table->boolean('practica_prevencion')->default(0);
            $table->boolean('practica_recursos')->default(0);
            $table->boolean('practica_produccion')->default(0);
            $table->boolean('practica_otros')->default(0);

            $table->longText('conoce_normativas')->nullable();
            $table->longText('interesa_normativas')->nullable();

            $table->boolean('interesa_calidad')->default(0);
            $table->boolean('interesa_prevencion')->default(0);
            $table->boolean('interesa_ambiente')->default(0);
            $table->boolean('interesa_otra')->default(0);
            
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
        Schema::dropIfExists('Rad_respuestas_9_a2');
    }
}
