<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSubseccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_subsecciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_respuesta')->constrained('tipo_respuestas');
            $table->foreignId('id_seccion')->constrained('tipo__secciones');
            $table->string('nombre',255)->nullable();
            $table->longText('descripcion')->nullable();
            $table->longText('url')->comment('URL de consulta donde se puede tener información para la sección.');
            $table->integer('orden')->default(1);
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
        Schema::dropIfExists('tipo_subsecciones');
    }
}
