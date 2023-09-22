<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionProyeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Poblacion_proyecciones', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cvegeo')->nullable();
            $table->decimal('ph2016', 10, 0)->nullable();
            $table->decimal('pm2016', 10, 0)->nullable();
            $table->decimal('pt2016', 10, 0)->nullable();
            $table->decimal('ph2017', 10, 0)->nullable();
            $table->decimal('pm2017', 10, 0)->nullable();
            $table->decimal('pt2017', 10, 0)->nullable();
            $table->decimal('ph2018', 10, 0)->nullable();
            $table->decimal('pm2018', 10, 0)->nullable();
            $table->decimal('pt2018', 10, 0)->nullable();
            $table->decimal('ph2019', 10, 0)->nullable();
            $table->decimal('pm2019', 10, 0)->nullable();
            $table->decimal('pt2019', 10, 0)->nullable();
            $table->decimal('ph2020', 10, 0)->nullable();
            $table->decimal('pm2020', 10, 0)->nullable();
            $table->decimal('pt2020', 10, 0)->nullable();
            $table->decimal('ph2021', 10, 0)->nullable();
            $table->decimal('pm2021', 10, 0)->nullable();
            $table->decimal('pt2021', 10, 0)->nullable();
            $table->decimal('ph2022', 10, 0)->nullable();
            $table->decimal('pm2022', 10, 0)->nullable();
            $table->decimal('pt2022', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Poblacion_proyecciones');
    }
}
