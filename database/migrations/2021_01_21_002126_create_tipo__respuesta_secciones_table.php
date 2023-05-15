<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoRespuestaSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo__respuesta_secciones', function (Blueprint $table) {
            $table->id();
            $table->string('slug_tabla_respuesta',250)->nullable();
            $table->foreignId('id_seccion')->constrained('tipo__secciones');
            $table->foreignId('id_subseccion')->constrained('tipo_subsecciones');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');
            
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
        Schema::dropIfExists('tipo__respuesta_secciones');
    }
}
