<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tics', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cvgeo')->nullable();
            $table->decimal('viviendas_habitadas', 10, 0)->nullable();
            $table->decimal('compu_dispone', 10, 0)->nullable();
            $table->decimal('inter_dispone', 10, 0)->nullable();
            $table->decimal('telefono_dispone', 10, 0)->nullable();
            $table->decimal('tvcable_dispone', 10, 0)->nullable();
            $table->decimal('celu_dispone', 10, 0)->nullable();
            $table->decimal('compu_nodispone', 10, 0)->nullable();
            $table->decimal('internet_nodispone', 10, 0)->nullable();
            $table->decimal('telefono_nodispone', 10, 0)->nullable();
            $table->decimal('tvcable_nodispone', 10, 0)->nullable();
            $table->decimal('celu_nodispone', 10, 0)->nullable();
            $table->decimal('compu_noesp', 10, 0)->nullable();
            $table->decimal('inter_noesp', 10, 0)->nullable();
            $table->decimal('telefono_noesp', 10, 0)->nullable();
            $table->decimal('tvcable_noesp', 10, 0)->nullable();
            $table->decimal('celu_noesp', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tics');
    }
}
