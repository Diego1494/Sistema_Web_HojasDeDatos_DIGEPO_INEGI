<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViviendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vivienda', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cvgeo')->nullable();
            $table->decimal('viviendas_habitadas', 10, 0)->nullable();
            $table->decimal('aguaentubada_dispone', 10, 0)->nullable();
            $table->decimal('drenaje_dispone', 10, 0)->nullable();
            $table->decimal('drenaje_nodispone', 10, 0)->nullable();
            $table->decimal('drenaje_noesp', 10, 0)->nullable();
            $table->decimal('electricidad_dispone', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Vivienda');
    }
}
