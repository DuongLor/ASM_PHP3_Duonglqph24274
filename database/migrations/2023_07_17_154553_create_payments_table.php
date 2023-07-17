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
		Schema::create('payments', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('booking_id');
			$table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
			$table->string('name');
			$table->enum('status', ['checking', 'complete'])->default('checking');
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
		Schema::dropIfExists('payments');
	}
};
