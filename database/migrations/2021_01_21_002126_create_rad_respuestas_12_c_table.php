<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas12CTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rad__respuestas_12_c', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->constrained('core__grupos');
            $table->foreignId('id_estado')->constrained('estado_respuestas');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');
            
            $table->boolean('interesado_asesoramiento')->nullable(); 
            $table->boolean('actividad_compras')->default(0); 
            $table->boolean('actividad_proveedores')->default(0); 
            $table->boolean('actividad_stocks')->default(0); 
            $table->boolean('actividad_almacen')->default(0); 
            $table->boolean('actividad_logistica')->default(0); 
            $table->boolean('actividad_ases_otros')->default(0); 
            $table->boolean('interesado_proyecto')->nullable(); 
            $table->boolean('actividad_metodologia')->default(0); 
            $table->boolean('actividad_reduccion')->default(0); 
            $table->boolean('actividad_mantenimiento')->default(0); 
            $table->boolean('actividad_automantenimiento')->default(0); 
            $table->boolean('actividad_efic_otros')->default(0);  

            

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
        Schema::dropIfExists('Rad__respuestas_12_c');
    }
}
