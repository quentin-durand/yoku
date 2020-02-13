<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEEstatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('e_estates', function(Blueprint $table)
		{
			$table->foreign('U_id', 'E_Estates_U_User_FK')->references('U_id')->on('u_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('e_estates', function(Blueprint $table)
		{
			$table->dropForeign('E_Estates_U_User_FK');
		});
	}

}
