<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas8B3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_8_b3', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('tramites_bancarios')->default(0);
            $table->boolean('facturacion_telematica')->default(0);
            $table->boolean('tramites_registros')->default(0);
            $table->boolean('tramites_administracion')->default(0);
            $table->boolean('tramites_organismos')->default(0);
            $table->boolean('tramites_ninguno')->default(0);
            $table->boolean('tramites_nsnc')->default(0);
            $table->boolean('tramites_otros')->default(0);
            
            $table->longText('tramites_cuales_otros')->nullable();
            
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
        Schema::dropIfExists('Rad_respuestas_8_b3');
    }
}
