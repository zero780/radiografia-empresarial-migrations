<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRespuestas2GTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rad__respuestas_2_g', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_radiografia')->constrained('rad__radiografias');
            $table->foreignId('id_grupo')->nullable()->constrained('core__grupos');
            $table->foreignId('id_tipo_respuesta')->nullable()->constrained('tipo_respuestas');

            $table->boolean('compra_materia_prima')->nullable()->comment('Compra materias primas en ..seniale la ciudad o provincia...');
            $table->foreignId('id_provincia_materia_prima')->nullable()->constrained('config__provincias');
            $table->foreignId('id_canton_materia_prima')->nullable()->constrained('config__cantones');
            $table->longText('cuales_materia_prima')->nullable()->comment('Que tipo de materias primas');
            $table->longText('porque_materia_prima')->nullable()->comment('Ha pensado en desarrollar proveedores locales en ..seniale la ciudad o provincia...');

            $table->boolean('desarrollar_proveedores_m')->nullable()->comment('Ha pensado en desarrollar proveedores locales en ..seniale la ciudad o provincia...');
            $table->foreignId('id_provincia_proveedores_m')->nullable()->constrained('config__provincias');
            $table->foreignId('id_canton_proveedores_m')->nullable()->constrained('config__cantones');
            $table->longText('cuales_proveedores_m')->nullable()->comment('Que materias primas podria comprar en ..seniale la ciudad o provincia...');
            $table->longText('porque_proveedores_m')->nullable()->comment('Cuales son las limitaciones para desarrollar proveedores locales de materia prima en ..seniale la ciudad o provincia...');

            $table->boolean('compra_insumos')->nullable()->comment('Compra insumos en ..seniale la ciudad o provincia...');
            $table->foreignId('id_provincia_insumos')->nullable()->constrained('config__provincias');
            $table->foreignId('id_canton_insumos')->nullable()->constrained('config__cantones');
            $table->longText('cuales_insumos')->nullable()->comment('Que tipo de insumos');
            $table->longText('porque_insumos')->nullable()->comment('Por que no compra insumos en ..seniale la ciudad o provincia...');

            $table->boolean('desarrollar_proveedores_i')->nullable()->comment('Ha pensado en desarrollar proveedores locales en ..seniale la ciudad o provincia...');
            $table->foreignId('id_provincia_proveedores_i')->nullable()->constrained('config__provincias');
            $table->foreignId('id_canton_proveedores_i')->nullable()->constrained('config__cantones');
            $table->longText('cuales_proveedores_i')->nullable()->comment('Que insumos podria comprar en ..seniale la ciudad o provincia..');
            $table->longText('porque_proveedores_i')->nullable()->comment('Cuales son las limitaciones para desarrollar proveedores locales de insumos en ..seniale la ciudad o provincia...');

            $table->boolean('existe_interes')->nullable();
            $table->longText('cuales_interes')->nullable();

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
        Schema::dropIfExists('rad__respuestas_2_g');
    }
}
