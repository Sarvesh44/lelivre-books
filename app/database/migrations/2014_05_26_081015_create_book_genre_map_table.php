<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookGenreMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_genre_map', function(Blueprint $table) {
			$table->string('genre_name', 25);
			$table->biginteger('isbn');
			$table->foreign('genre_name')->references('genre_name')->on('book_genre')->onDelete('cascade');
			$table->foreign('isbn')->references('isbn')->on('book')->onDelete('cascade');
			$table->unique(array('isbn', 'genre_name'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_genre_map');
	}

}
