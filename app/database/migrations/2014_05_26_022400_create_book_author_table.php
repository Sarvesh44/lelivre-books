<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookAuthorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book_author', function(Blueprint $table)
		{
			$table->biginteger('isbn');
			$table->integer('authid');
			$table->foreign('authid')->references('authid')->on('author')->onDelete('cascade');
			$table->foreign('isbn')->references('isbn')->on('book')->onDelete('cascade');
			$table->unique(array('isbn', 'authid'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book_author');
	}

}
