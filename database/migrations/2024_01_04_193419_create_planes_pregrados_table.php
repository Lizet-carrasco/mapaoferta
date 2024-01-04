<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_pregrados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('escuela_id')->nullable()->index('planes_pregrados_escuela_id_foreign');
            $table->unsignedInteger('tema_id')->nullable()->index('planes_pregrados_tema_id_foreign');
            $table->string('nombre', 250)->nullable();
            $table->string('enlace_plan', 250)->nullable();
            $table->string('periodo_inicio', 4)->nullable();
            $table->string('periodo_fin', 4)->nullable();
            $table->integer('vigencia')->nullable();
            $table->integer('estado')->nullable();
            $table->timestamps();
            $table->string('curso', 250)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes_pregrados');
    }
};
