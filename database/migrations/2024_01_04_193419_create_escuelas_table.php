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
        Schema::create('escuelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 250)->nullable();
            $table->string('sigla', 12)->nullable();
            $table->string('logo', 80)->nullable();
            $table->integer('estado')->nullable();
            $table->timestamps();
            $table->unsignedInteger('facultad_id')->nullable()->index('escuelas_facultad_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escuelas');
    }
};
