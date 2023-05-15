<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthRoPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth__ro_permisos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rol')->constrained('auth__roles');
            $table->foreignId('id_permiso')->constrained('auth__permisos');
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
        Schema::dropIfExists('auth__ro_permisos');
    }
}
