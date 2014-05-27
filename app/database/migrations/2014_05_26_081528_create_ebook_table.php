<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEbookTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ebook', function(Blueprint $table) {
			$table->integer('quantity');
			$table->decimal('price',8,2);
			$table->biginteger('isbn');
			$table->foreign('isbn')->references('isbn')->on('book')->onDelete('cascade');
			$table->unique('isbn');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ebook');
	}

}
