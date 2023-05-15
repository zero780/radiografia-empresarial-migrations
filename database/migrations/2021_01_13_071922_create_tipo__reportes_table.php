<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo__reportes', function (Blueprint $table) {
            $table->id();
            $table->string('slug',255);
            $table->string('nombre',255);
            $table->string('nombre_archivo',255);
            $table->string('componente',255)->comment('Componente REACT que se debe mostrar en pantalla.');
            $table->longText('url')->comment('URL del API que debe consumirse.');
            $table->longText('columnas')->nullable()->comment('Json de columnas del reporte.');
            $table->longText('consulta')->nullable()->comment('Query del reporte.');

            $table->integer('orden')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo__reportes');
    }
}
