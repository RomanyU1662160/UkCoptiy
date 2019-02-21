<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('events')) {
            Schema::create('events', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('church_id')->unsigned()->index();
                $table->string('name')->nullable();
                $table->date('date')->nullable();
                $table->dateTime('start_at')->nullable();
                $table->dateTime('end_at')->nullable();
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
        Schema::dropIfExists('events');
    }
}
