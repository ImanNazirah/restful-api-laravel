<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotifySongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('spotify_song', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('track_name');
            $table->string('artist_name');
            $table->string('genre');
            $table->integer('popularity');
   
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spotify_song');
    }
}
