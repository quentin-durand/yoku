<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sc_meta', function(Blueprint $table)
		{
			$table->integer('M_Id', true);
			$table->string('M_ScheduleKey', 250);
			$table->string('M_ScheduleValue', 250);
			$table->integer('SC_Id')->index('SC_Meta_SC_Schedules_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sc_meta');
	}

}
