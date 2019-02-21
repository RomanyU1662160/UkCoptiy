<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('families')) {

            Schema::create('families', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('church_id')->unsigned()->index()->nullable();
                $table->string('name');
                $table->timestamps();
                $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
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
        Schema::dropIfExists('families');
    }
}
