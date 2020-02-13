<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHasModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('has_modules', function(Blueprint $table)
		{
			$table->foreign('U_id', 'Has_modules_U_User_FK')->references('U_id')->on('u_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('M_Id', 'Has_modules_M_Modules0_FK')->references('M_Id')->on('m_modules')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('has_modules', function(Blueprint $table)
		{
			$table->dropForeign('Has_modules_U_User_FK');
			$table->dropForeign('Has_modules_M_Modules0_FK');
		});
	}

}
