<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoblacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Poblacion', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cve_geo')->nullable();
            $table->text('gpo_edad')->nullable();
            $table->decimal('total_poblacion', 10, 0)->nullable();
            $table->decimal('hombres', 10, 0)->nullable();
            $table->decimal('mujeres', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Poblacion');
    }
}
