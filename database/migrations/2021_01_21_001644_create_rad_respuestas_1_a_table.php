<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas1ATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rad__respuestas_1_1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->nullable()->constrained('core__grupos');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');
            
            $table->string('nombre_comercial',500)->nullable();
            $table->string('razon_social',500)->nullable();
            $table->string('representante_legal',500)->nullable();
            $table->foreignId('id_tipo_identificacion')->nullable()->constrained('tipo__identificaciones');
            $table->string('identificacion',50)->nullable();
            $table->string('gerente',500)->nullable();
            $table->foreignId('id_provincia')->nullable()->constrained('config__provincias');
            $table->foreignId('id_canton')->nullable()->constrained('config__cantones');
            $table->foreignId('id_parroquia')->nullable()->constrained('config__parroquias');
            $table->longText('direccion')->nullable();
            $table->string('telefono',500)->nullable();
            $table->string('web',500)->nullable();
            $table->string('email',500)->nullable();

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
        Schema::dropIfExists('rad__respuestas_1_1');
    }
}
