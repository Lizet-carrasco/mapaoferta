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
        Schema::table('planes_pregrados', function (Blueprint $table) {
            $table->foreign(['tema_id'])->references(['id'])->on('temas');
            $table->foreign(['escuela_id'])->references(['id'])->on('escuelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('planes_pregrados', function (Blueprint $table) {
            $table->dropForeign('planes_pregrados_tema_id_foreign');
            $table->dropForeign('planes_pregrados_escuela_id_foreign');
        });
    }
};
