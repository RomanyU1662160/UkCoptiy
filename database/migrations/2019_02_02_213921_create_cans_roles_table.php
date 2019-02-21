<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCansRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('cans_roles')) {
            Schema::create('cans_roles', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('can_id')->unsigned()->index();
                $table->integer('role_id')->unsigned()->index();
                $table->timestamps();
                $table->foreign('can_id')->references('id')->on('cans')->onDelete('cascade');
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cans_roles');
    }
}
