<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHardbackTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hardback', function(Blueprint $table) {
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
		Schema::drop('hardback');
	}

}
