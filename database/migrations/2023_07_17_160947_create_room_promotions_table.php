<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('room_promotions', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('room_id');
			$table->unsignedBigInteger('promotion_id');
			$table->decimal('discount', 10, 0);
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
		Schema::dropIfExists('room_promotions');
	}
};
