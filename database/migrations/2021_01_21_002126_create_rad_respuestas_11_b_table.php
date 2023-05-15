<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas11BTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_11_b', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('tiene_previsto')->nullable();  

            $table->boolean('inversion_tecnologia')->default(0);
            $table->boolean('inversion_recursos')->default(0);
            $table->boolean('inversion_maquinaria')->default(0);
            $table->boolean('inversion_marketing')->default(0);
            $table->boolean('inversion_i_d')->default(0);
            $table->boolean('inversion_seguridad')->default(0);
            $table->boolean('inversion_instalaciones')->default(0);
            $table->boolean('inversion_locales')->default(0);
            $table->boolean('inversion_otras')->default(0);
           
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
        Schema::dropIfExists('Rad_respuestas_11_b');
    }
}
