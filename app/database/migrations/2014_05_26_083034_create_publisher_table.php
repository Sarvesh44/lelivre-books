<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePublisherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publisher', function(Blueprint $table) {
			$table->increments('pubid');
			$table->string('name', 35);
			$table->string('street', 25)->nullable();
			$table->string('city', 25);
			$table->string('state', 25);
			$table->string('country', 25);
			$table->biginteger('zipcode');
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('publisher');
	}

}
