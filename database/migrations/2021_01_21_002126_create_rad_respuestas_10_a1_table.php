<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas10A1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_10_a1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('pertenece_holding')->nullable();
            $table->longText('cual_grupo')->nullable();
            $table->boolean('pertenece_incubadora')->nullable();
            $table->longText('cual_incubadora')->nullable();

            $table->boolean('pertenece_asociacion')->nullable();
            $table->boolean('cual_asociacion')->nullable();
            $table->boolean('interes_asociacion')->nullable();
            $table->longText('motivo_asociacion')->nullable();
            $table->boolean('colabora_con_universidades')->nullable();
            $table->boolean('colabora_con_empresas')->nullable();

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
        Schema::dropIfExists('Rad_respuestas_10_a1');
    }
}
