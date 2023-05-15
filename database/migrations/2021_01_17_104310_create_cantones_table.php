<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCantonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config__cantones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_provincia')->constrained('config__provincias');
            $table->string('nombre',250);
            $table->string('cod_provincia',25);
            $table->string('codigo',25)->unique();
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
        Schema::dropIfExists('config__cantones');
    }
}
