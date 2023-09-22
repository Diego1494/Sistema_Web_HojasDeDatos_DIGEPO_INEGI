<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Educacion', function (Blueprint $table) {
            $table->integer('id')->nullable()->primary();
            $table->integer('cve_geo')->nullable();
            $table->text('sexo')->nullable();
            $table->text('gpo_edad')->nullable();
            $table->decimal('pob_3_anios_y_mas', 10, 0)->nullable();
            $table->decimal('sin_escolaridad', 10, 0)->nullable();
            $table->decimal('basico_preescolar', 10, 0)->nullable();
            $table->decimal('basico_primaria', 10, 0)->nullable();
            $table->decimal('basico_secundaria', 10, 0)->nullable();
            $table->decimal('tecnico_comer_primaria', 10, 0)->nullable();
            $table->decimal('media_sup_tecnico_comer_secundaria', 10, 0)->nullable();
            $table->decimal('media_sup_prepa_bachillerato', 10, 0)->nullable();
            $table->decimal('normal_basica', 10, 0)->nullable();
            $table->decimal('sup_tecnico_comer_prepa', 10, 0)->nullable();
            $table->decimal('sup_licenciatura', 10, 0)->nullable();
            $table->decimal('sup_posgrado', 10, 0)->nullable();
            $table->decimal('no_especificado', 10, 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Educacion');
    }
}
