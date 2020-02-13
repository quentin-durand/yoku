<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToScSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sc_schedules', function(Blueprint $table)
		{
			$table->foreign('U_id', 'SC_Schedules_U_User_FK')->references('U_id')->on('u_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('E_Id', 'SC_Schedules_E_Estates0_FK')->references('E_Id')->on('e_estates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sc_schedules', function(Blueprint $table)
		{
			$table->dropForeign('SC_Schedules_U_User_FK');
			$table->dropForeign('SC_Schedules_E_Estates0_FK');
		});
	}

}