<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__grupos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_estado')->constrained('estado__grupos');
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_vinculo')->constrained('core__vinculos');
            $table->foreignId('id_supervisador')->constrained('auth__usuarios');
            $table->longText('motivo_solicitud')->nullable();
            $table->longText('motivo_respuesta')->nullable();
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
        Schema::dropIfExists('core__grupos');
    }
}
