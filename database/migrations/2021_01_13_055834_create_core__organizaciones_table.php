<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreOrganizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__organizaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tipo_identificacion')->constrained('tipo__identificaciones');
            $table->string('slug',50)->unique();
            $table->string('identificacion',50)->unique()->comment('RUC u otro tipo de identificacion.');
            $table->longText('nombre');
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
        Schema::dropIfExists('core__organizaciones');
    }
}
