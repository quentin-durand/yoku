<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('u_meta', function(Blueprint $table)
		{
			$table->integer('M_Id', true);
			$table->string('M_UserKey', 250);
			$table->string('M_UserValue', 250);
			$table->integer('U_id')->index('U_Meta_U_User_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('u_meta');
	}

}
