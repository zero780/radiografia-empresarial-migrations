<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas6F2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_6_f2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->foreignId('id_continente')->nullable()->constrained('config__continentes');
            $table->foreignId('id_pais')->nullable()->constrained('config__paises');
            
            $table->boolean('existe_interes')->nullable();

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
        Schema::dropIfExists('Rad_respuestas_6_f2');
    }
}
