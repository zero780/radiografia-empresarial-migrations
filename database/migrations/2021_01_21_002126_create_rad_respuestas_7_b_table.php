<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas7BTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_7_b', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->foreignId('id_tipo_cualificacion')->nullable()->constrained('tipo__cualificaciones');
            

            $table->string('area_empresa',200)->nullable();
            $table->string('persona_contacto',200)->nullable();
            $table->string('genero',200)->nullable();
            
            
            $table->string('puesto_trabajo',200)->nullable();
            $table->string('telefono',200)->nullable();
            $table->string('email',200)->nullable();

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
        Schema::dropIfExists('Rad_respuestas_7_b');
    }
}
