<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('book', function(Blueprint $table)
		{
			$table->biginteger('isbn');
            $table->string('title');
            $table->integer('pub_year');
            $table->char('edition');
            $table->primary('isbn');
            $table->unique(array('title', 'edition'));
            $table->unique(array('title', 'edition', 'isbn'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('book');
	}

}
