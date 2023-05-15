<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas9A1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_9_a1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('tiene_certificaciones')->nullable();
            $table->boolean('tiene_certificacion_18001')->default(0);
            $table->boolean('tiene_certificacion_9001')->default(0);
            $table->boolean('tiene_certificacion_14001')->default(0);
            $table->boolean('tiene_certificacion_otra')->default(0);

            $table->longText('cuales_certificaciones_tiene')->nullable();

            $table->boolean('interesa_certificacion_18001')->default(0);
            $table->boolean('interesa_certificacion_9001')->default(0);
            $table->boolean('interesa_certificacion_14001')->default(0);
            $table->boolean('interesa_certificacion_otra')->default(0);

            $table->longText('cuales_certificaciones_desea')->nullable();
            
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
        Schema::dropIfExists('Rad_respuestas_9_a1');
    }
}
