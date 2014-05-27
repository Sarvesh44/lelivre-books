<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthorRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('author_rating', function(Blueprint $table) {
			$table->integer('authid');
			$table->string('username', 35);
			$table->integer('rating');
			$table->string('review', 500)->nullable();
			$table->primary(array('authid', 'username'));
			$table->foreign('username')->references('username')->on('customer')->onDelete('cascade');
			$table->foreign('authid')->references('authid')->on('author')->onDelete('cascade');

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
		Schema::drop('author_rating');
	}

}
