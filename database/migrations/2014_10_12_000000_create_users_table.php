<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
      $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->default('default.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('phone')->nullable();
            $table->string('carmake');
            $table->string('marmodel');
            $table->rememberToken();
            $table->timestamps();
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('email')->unique();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->default('default.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('phone')->nullable();
             $table->string('carmake');
            $table->string('marmodel');
            $table->string('token')->nullable();
            $table->rememberToken();
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
}
