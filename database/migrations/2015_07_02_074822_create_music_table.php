<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMusicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('musics', function(Blueprint $table)
        {
            $table->increments('music_id');
            $table->integer('language');
            $table->integer('singer');
            $table->integer('actor');
            $table->integer('movie');
            $table->integer('album');
            $table->integer('new_release');
            $table->integer('bestof');
            $table->string('music_file');
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
		Schema::drop('musics');
	}

}
