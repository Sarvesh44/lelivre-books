<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payment_info', function(Blueprint $table) {
			$table->biginteger('card_num');
			$table->integer('exp_month');
			$table->integer('exp_year');

			$table->string('name', 35);
			$table->string('street', 25)->nullable();
			$table->string('city', 25);
			$table->string('state', 25);
			$table->string('country', 25);
			$table->biginteger('zipcode');
			$table->integer('country_code');
			$table->biginteger('mobile_number');
			$table->string('cusername', 35);
			$table->foreign('cusername')->references('username')->on('customer')->onDelete('cascade');

			$table->primary(array('card_num', 'cusername'));

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
		Schema::drop('payment_info');
	}

}
