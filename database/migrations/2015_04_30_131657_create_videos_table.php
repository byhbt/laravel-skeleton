<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('youtube_id')->unique();
            $table->string('title');
            $table->string('slug')->unique();
            $table->tinyInteger('status');
            $table->text('description');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('video_categories');
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
        Schema::drop('videos');
    }

}
