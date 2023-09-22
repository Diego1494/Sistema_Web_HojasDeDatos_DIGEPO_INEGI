<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Salud', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cve_geo')->nullable();
            $table->text('sexo')->nullable();
            $table->text('gpo_edad')->nullable();
            $table->decimal('pob_total', 10, 0)->nullable();
            $table->decimal('afiliada_total', 10, 0)->nullable();
            $table->decimal('imss', 10, 0)->nullable();
            $table->decimal('issste', 10, 0)->nullable();
            $table->decimal('issste_estatal', 10, 0)->nullable();
            $table->decimal('pemex_def_mar', 10, 0)->nullable();
            $table->decimal('bienestar', 10, 0)->nullable();
            $table->decimal('imss_bienestar', 10, 0)->nullable();
            $table->decimal('privada', 10, 0)->nullable();
            $table->decimal('otra_institucion', 10, 0)->nullable();
            $table->decimal('no_afiliada', 10, 0)->nullable();
            $table->decimal('no_especificada', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Salud');
    }
}
