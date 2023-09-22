<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Llave', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cvgeo')->nullable();
            $table->text('municipio')->nullable();
            $table->text('mun_interno')->nullable();
            $table->integer('cvreg')->nullable();
            $table->text('region')->nullable();
            $table->integer('cvdis')->nullable();
            $table->text('distrito')->nullable();
            $table->decimal('lat_dec', 10, 0)->nullable();
            $table->decimal('lon_dec', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Llave');
    }
}
