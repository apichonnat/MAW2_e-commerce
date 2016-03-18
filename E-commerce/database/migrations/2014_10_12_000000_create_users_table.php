<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('card_number')->nullable();
            $table->string('mail')->unique();
            $table->string('pseudo')->unique();
            $table->string('password');
            $table->integer('address_delivery_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->boolean('validate');
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
        Schema::drop('users');
    }
}
