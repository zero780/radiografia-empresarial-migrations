<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreViRepresentanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__vi_representante', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_vinculo')->constrained('core__vinculos');
            $table->foreignId('id__usuario')->constrained('auth__usuarios');
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
        Schema::dropIfExists('core__vi_representante');
    }
}
