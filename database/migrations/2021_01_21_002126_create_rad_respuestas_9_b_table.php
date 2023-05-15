<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas9BTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_9_b', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('toma_medidas')->nullable();
            $table->longText('cuales_medidas')->nullable();
            $table->boolean('tiene_auditorias')->nullable();
            $table->boolean('interesa_auditorias')->nullable();

            $table->boolean('medida_eficiencia_instalaciones')->default(0);
            $table->boolean('medida_eficiencia_proceso')->default(0);
            $table->boolean('plan_residuos')->default(0);
            $table->boolean('plan_agua')->default(0);

            $table->boolean('dispone_fuentes_renovables')->nullable();
            $table->longText('cuales_fuentes')->nullable();

            $table->boolean('interes_fotovoltaica')->default(0);
            $table->boolean('interes_solar_termica')->default(0);
            $table->boolean('interes_biomasa')->default(0);
            $table->boolean('interes_eolica')->default(0);
            $table->boolean('interes_cogeneracion')->default(0);
            $table->boolean('interes_desconoce')->default(0);

            $table->boolean('dispone_informe')->nullable();
            $table->longText('cuales_informes')->nullable();
            $table->longText('quien_emitio_informe')->nullable();

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
        Schema::dropIfExists('Rad_respuestas_9_b');
    }
}
