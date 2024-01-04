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
        Schema::table('facultades', function (Blueprint $table) {
            $table->foreign(['universidad_id'])->references(['id'])->on('universidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facultades', function (Blueprint $table) {
            $table->dropForeign('facultades_universidad_id_foreign');
        });
    }
};
