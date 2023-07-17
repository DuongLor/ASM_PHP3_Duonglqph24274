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
		Schema::create('rooms', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('hotel_id');
			$table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
			$table->unsignedBigInteger('type_id');
			$table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
			$table->string('name');
			$table->decimal('price', 10, 0);
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
		Schema::dropIfExists('rooms');
	}
};
