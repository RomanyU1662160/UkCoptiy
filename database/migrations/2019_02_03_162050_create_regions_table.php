<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('regions')) {
            Schema::create('regions', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('parish_id')->unsigned()->index();
                $table->string('name');
                $table->timestamps();
                $table->foreign('parish_id')->references('id')->on('parishes')->onDelete('cascade');
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
        Schema::dropIfExists('regions');
    }
}
