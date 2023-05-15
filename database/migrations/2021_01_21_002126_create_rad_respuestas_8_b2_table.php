<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas8B2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_8_b2', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('software_exclusivo')->default(0);
            $table->boolean('solucion_formacion')->default(0);
            $table->boolean('solucion_especifica')->default(0);
            $table->boolean('software_compras')->default(0);
            $table->boolean('gestion_conocimiento')->default(0);
            $table->boolean('bases_datos')->default(0);
            $table->boolean('software_gestion_clientes')->default(0);
            $table->boolean('software_gestion_empresas')->default(0);
            $table->boolean('software_ofimatico')->default(0);
            $table->boolean('software_ninguno')->default(0);
            $table->boolean('software_nsnc')->default(0);
            $table->boolean('software_otros')->default(0);

            $table->longText('software_cuales_otros')->nullable();
            
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
        Schema::dropIfExists('Rad_respuestas_8_b2');
    }
}
