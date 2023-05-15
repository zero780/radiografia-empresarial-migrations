<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config__parroquias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_provincia')->constrained('config__provincias');
            $table->foreignId('id_canton')->constrained('config__cantones');
            $table->string('nombre',250);
            $table->string('cod_provincia',25);
            $table->string('cod_canton',25);
            $table->string('codigo',25)->unique();
            $table->boolean('is_rural')->default(true);
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
        Schema::dropIfExists('config__parroquias');
    }
}
