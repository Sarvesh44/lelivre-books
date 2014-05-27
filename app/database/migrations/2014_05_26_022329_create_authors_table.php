<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('author', function(Blueprint $table)
		{
			$table->increments('authid');
			$table->char('birth_city', 25);
            $table->char('birth_state', 25);
            $table->char('birth_country', 25);
            $table->date('auth_dob');
            $table->string('auth_bio');
            $table->string('auth_firstname');
            $table->string('auth_lastname');
                  
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('author');
	}

}
