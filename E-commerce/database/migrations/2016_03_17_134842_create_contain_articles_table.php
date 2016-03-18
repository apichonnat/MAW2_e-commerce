<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contain_articles', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->mediumText('description');
            $table->integer('language_id')->unsigned();
            $table->integer('article_id')->unsigned();
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
        Schema::drop('contain_articles');
    }
}
