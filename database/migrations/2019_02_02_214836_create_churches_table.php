<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChurchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('churches')) {
            Schema::create('churches', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('region_id')->unsigned()->index();
                $table->integer('parish_id')->unsigned()->index();
                $table->string('name')->unique();
                $table->string('city')->nullable();
                $table->string('postcode')->nullable();
                $table->string('address1')->nullable();
                $table->string('address2')->nullable();
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('about')->nullable();
                $table->timestamps();
                $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
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
        Schema::dropIfExists('churches');
    }
}
