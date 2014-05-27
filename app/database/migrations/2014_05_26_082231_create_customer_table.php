<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_old', function(Blueprint $table) {
			$table->string('firstname', 25);
			$table->string('lastname', 25);
			$table->date('dob');
			$table->string('email', 35);
			$table->string('password', 100);
			$table->string('username', 35);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->primary('username');
            $table->unique('email');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer');
	}

}
