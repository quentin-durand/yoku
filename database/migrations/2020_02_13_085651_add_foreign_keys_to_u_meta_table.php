<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('u_meta', function(Blueprint $table)
		{
			$table->foreign('U_id', 'U_Meta_U_User_FK')->references('U_id')->on('u_user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('u_meta', function(Blueprint $table)
		{
			$table->dropForeign('U_Meta_U_User_FK');
		});
	}

}
