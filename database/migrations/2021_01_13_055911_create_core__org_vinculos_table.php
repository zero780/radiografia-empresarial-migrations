<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoreOrgVinculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core__org_vinculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id__organizacion')->constrained('core__organizaciones');
            $table->foreignId('id_vinculo')->constrained('core__vinculos');
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
        Schema::dropIfExists('core__org_vinculos');
    }
}
