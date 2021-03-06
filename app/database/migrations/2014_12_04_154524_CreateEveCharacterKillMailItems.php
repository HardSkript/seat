<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEveCharacterKillMailItems extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('character_killmail_items', function(Blueprint $table)
		{
		  $table->increments('id');

		  $table->integer('killID');

		  $table->integer('typeID');
		  $table->integer('flag');
		  $table->integer('qtyDropped');
		  $table->integer('qtyDestroyed');
		  $table->integer('singleton');

		  // Indexes
		  $table->index('killID');

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
		Schema::dropIfExists('character_killmail_items');
	}

}
