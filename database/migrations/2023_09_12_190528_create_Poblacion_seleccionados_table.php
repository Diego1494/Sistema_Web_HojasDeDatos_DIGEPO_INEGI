<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionSeleccionadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Poblacion_seleccionados', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cve_geo')->nullable();
            $table->decimal('rel_hombre_mujer', 10, 0)->nullable();
            $table->decimal('r_dep_total', 10, 0)->nullable();
            $table->decimal('r_dep_infatil', 10, 0)->nullable();
            $table->decimal('r_dep_vejez', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Poblacion_seleccionados');
    }
}
