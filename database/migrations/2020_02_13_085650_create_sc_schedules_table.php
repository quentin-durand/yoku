<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateScSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sc_schedules', function(Blueprint $table)
		{
			$table->integer('SC_Id', true);
			$table->string('SC_MeetingDate', 10);
			$table->string('SC_MeetingPlace', 250);
			$table->string('SC_Topic', 250);
			$table->integer('U_id')->index('SC_Schedules_U_User_FK');
			$table->integer('E_Id')->index('SC_Schedules_E_Estates0_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sc_schedules');
	}

}
