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
        Schema::create('permission_dependencies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('permission_id')->index('permission_dependencies_permission_id_foreign');
            $table->unsignedInteger('dependency_id')->index('permission_dependencies_dependency_id_foreign');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00');
            $table->timestamp('updated_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_dependencies');
    }
};
