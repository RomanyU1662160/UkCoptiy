<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('family_id')->unsigned()->index()->nullable();
                $table->string('password');
                $table->string('title')->nullable();
                $table->string('fname');
                $table->string('lname');
                $table->string('email')->unique();
                $table->string('gender')->nullable();
                $table->string('mobile')->nullable();
                $table->string('house')->nullable();
                $table->string('address')->nullable();
                $table->string('postcode')->nullable();
                $table->date('dob')->nullable();
                $table->string('avatar')->nullable();
                $table->boolean('live')->default(false);
                $table->foreign('family_id')->references('id')->on('families')->onDelete('cascade');
                $table->rememberToken();
                $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
