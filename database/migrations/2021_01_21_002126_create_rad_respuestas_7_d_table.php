<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas7DTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_7_d', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->foreignId('id_tipo_aumento')->nullable()->constrained('tipo__aumento');
            $table->boolean('varia_num_empleados')->nullable();
            $table->longText('que_epocas')->nullable();
            $table->longText('que_perfiles')->nullable();
            $table->boolean('existen_problematicas')->nullable();
            $table->longText('que_tipo_perfil_problema')->nullable();
            $table->boolean('preve_aumentar')->nullable();
            $table->longText('que_vias_utiliza')->nullable();
            $table->boolean('ha_acogido')->nullable();
            $table->boolean('esta_interesado')->nullable();
            $table->longText('para_que_perfiles')->nullable();
            $table->foreignId('id_canton')->nullable()->constrained('config__cantones');
            $table->double('porcentaje_canton',8,4)->nullable();
            $table->double('porcentaje_otros',8,4)->nullable();
            
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
        Schema::dropIfExists('Rad_respuestas_7_d');
    }
}
