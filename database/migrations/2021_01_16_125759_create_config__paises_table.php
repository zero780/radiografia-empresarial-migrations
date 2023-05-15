<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigPaisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config__paises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_continente')->nullable()->constrained('config__continentes');
            $table->string('nombre',250);
            $table->string('codigo',25)->unique();
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
        Schema::dropIfExists('config__paises');
    }
}
