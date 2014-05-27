<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerGenreMapTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_genre_map', function(Blueprint $table) {
			$table->string('genre_name', 25);
			$table->string('cusername', 35);
			$table->foreign('genre_name')->references('genre_name')->on('book_genre')->onDelete('cascade');
			$table->foreign('cusername')->references('username')->on('customer')->onDelete('cascade');
			$table->unique(array('cusername', 'genre_name'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_genre_map');
	}

}
