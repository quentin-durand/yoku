<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAAgentsEEstatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('a_agents_e_estates', function(Blueprint $table)
		{
			$table->foreign('U_id', 'a_agents_e_estates_U_User_FK')->references('U_id')->on('u_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('E_Id', 'a_agents_e_estates_E_Estates0_FK')->references('E_Id')->on('e_estates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('a_agents_e_estates', function(Blueprint $table)
		{
			$table->dropForeign('a_agents_e_estates_U_User_FK');
			$table->dropForeign('a_agents_e_estates_E_Estates0_FK');
		});
	}

}
