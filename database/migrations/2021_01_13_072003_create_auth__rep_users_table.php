<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthRepUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth__rep_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_reporte')->constrained('tipo__reportes');
            $table->foreignId('id_usuario')->constrained('auth__usuarios');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('created_by')->nullable()->constrained('auth__usuarios');
            $table->foreignId('updated_by')->nullable()->constrained('auth__usuarios');
            $table->foreignId('deleted_by')->nullable()->constrained('auth__usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth__rep_users');
    }
}
