<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo__secciones', function (Blueprint $table) {
            $table->id();
            $table->string('slug',50)->unique();
            $table->string('nombre',255);
            $table->string('componente',255)->comment('Componente REACT que se debe mostrar en pantalla.');
            $table->string('descripcion',255)->nullable();
            $table->longText('url')->nullable()->comment('URL de consulta donde se puede tener información para la sección.');
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
        Schema::dropIfExists('tipo__secciones');
    }
}
