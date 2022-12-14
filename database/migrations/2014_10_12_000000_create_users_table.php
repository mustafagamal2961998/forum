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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name',55);
            $table->string('last_name',55)->nullable();
            $table->string('avatar',255)->nullable();
            $table->string('lang',20)->nullable();
            $table->string('dir',20)->nullable();
            $table->integer('rate');

            $table->integer('email_verify_state')->nullable();
            $table->integer('email_verify_code');
            $table->integer('state');
            $table->integer('online');
            $table->bigInteger('department_id')->unsigned();
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
        Schema::dropIfExists('users');
    }
};
