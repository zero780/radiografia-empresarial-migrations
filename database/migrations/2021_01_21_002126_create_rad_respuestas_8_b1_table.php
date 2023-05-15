<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas8B1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_8_b1', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('equipo_pc_mesa')->default(0);
            $table->boolean('equipo_pc_portatil')->default(0);
            $table->boolean('equipo_navegador')->default(0);
            $table->boolean('equipo_agenda')->default(0);
            $table->boolean('equipo_terminal')->default(0);
            $table->boolean('equipo_tablet')->default(0);
            $table->boolean('equipo_smartphone')->default(0);
            $table->boolean('equipo_ninguno')->default(0);
            $table->boolean('equipo_nsnc')->default(0);
            $table->boolean('equipo_otros')->default(0);

            $table->longText('equipo_cuales_otros')->nullable();
            
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
        Schema::dropIfExists('Rad_respuestas_8_b1');
    }
}
