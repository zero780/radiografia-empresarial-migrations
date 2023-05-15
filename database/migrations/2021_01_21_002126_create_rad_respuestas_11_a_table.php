<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas11ATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_11_a', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('facturacion_100000')->default(0);
            $table->boolean('facturacion_100000_300000')->default(0);
            $table->boolean('facturacion_300000_500000')->default(0);
            $table->boolean('facturacion_500000_1m')->default(0);
            $table->boolean('facturacion_1m_2m')->default(0);
            $table->boolean('facturacion_2m_5m')->default(0);
            $table->boolean('facturacion_5m_10m')->default(0);
            $table->boolean('facturacion_10m')->default(0);
            $table->boolean('facturacion_nsnc')->default(0);
            $table->boolean('que_genera')->nullable();  
            $table->boolean('dispone_mecanismo')->nullable();  
            $table->boolean('esta_interesado')->nullable();  
            
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
        Schema::dropIfExists('Rad_respuestas_11_a');
    }
}
