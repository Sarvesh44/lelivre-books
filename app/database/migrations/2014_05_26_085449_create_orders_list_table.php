<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders_list', function(Blueprint $table) {
			$table->biginteger('isbn');
			$table->string('order_num', 25);
			$table->string('book_type', 25);
			$table->integer('quantity');
			$table->foreign('isbn')->references('isbn')->on('book')->onDelete('cascade');
			$table->foreign('order_num')->references('order_num')->on('orders')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders_list');
	}

}
