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
        Schema::create('posgrados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('universidad_id')->nullable()->index('posgrados_universidad_id_foreign');
            $table->string('nombre_completo', 250)->nullable();
            $table->string('mencion', 250)->nullable();
            $table->string('tipo', 10)->nullable();
            $table->integer('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posgrados');
    }
};
