<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_rating', function(Blueprint $table) {
			$table->biginteger('isbn');
			$table->string('username', 35);
			$table->integer('rating');
			$table->string('review', 500)->nullable();
			$table->primary(array('isbn', 'username'));
			$table->foreign('username')->references('username')->on('customer')->onDelete('cascade');
			$table->foreign('isbn')->references('isbn')->on('book')->onDelete('cascade');

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
		Schema::drop('book_rating');
	}

}
