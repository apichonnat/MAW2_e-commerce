<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeyMediaTypeMedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('media', function(Blueprint $table){
            $table->foreign('type_media_id')->references('id')->on('type_media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('media', function(Blueprint $table){
            $table->dropForeign('[type_media_id]');
        });
    }
}
