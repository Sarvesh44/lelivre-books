<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			
			$table->string('order_num', 25);
			$table->integer('quantity');
			$table->decimal('total_price', 8, 2);
			$table->string('cusername', 35);
			$table->biginteger('card_num');
			$table->primary('order_num');
			$table->foreign('cusername')->references('username')->on('customer')->onDelete('cascade');
			

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
		Schema::drop('orders');
	}

}
