<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookPublisherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_publisher', function(Blueprint $table) {
			$table->integer('pubid');
			$table->biginteger('isbn');
			$table->foreign('pubid')->references('pubid')->on('publisher')->onDelete('cascade');
			$table->foreign('isbn')->references('isbn')->on('book')->onDelete('cascade');
			$table->unique(array('isbn', 'pubid'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_publisher');
	}

}
