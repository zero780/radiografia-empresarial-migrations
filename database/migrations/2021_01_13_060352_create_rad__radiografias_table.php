<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadRadiografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rad__radiografias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_estado')->nullable()->constrained('estado__radiografias');
            $table->foreignId('id_organizacion')->constrained('core__organizaciones');
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
        Schema::dropIfExists('rad__radiografias');
    }
}
