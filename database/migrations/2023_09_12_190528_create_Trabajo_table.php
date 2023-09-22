<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Trabajo', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cve_geo')->nullable();
            $table->text('sexo')->nullable();
            $table->text('gpo_edad')->nullable();
            $table->decimal('pob_12_anios_y_mas', 10, 0)->nullable();
            $table->decimal('total_eco_activa', 10, 0)->nullable();
            $table->decimal('pob_eco_activa_ocupada', 10, 0)->nullable();
            $table->decimal('pob_eco_activa_desocupada', 10, 0)->nullable();
            $table->decimal('no_economicamente_activa', 10, 0)->nullable();
            $table->decimal('no_especificado', 10, 0)->nullable();
            $table->decimal('tasa_esp_participacion', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Trabajo');
    }
}
