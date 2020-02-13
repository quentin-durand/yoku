<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('u_user', function(Blueprint $table)
		{
			$table->integer('U_id', true);
			$table->string('U_LastName', 250);
			$table->string('U_FirstName', 250);
			$table->string('U_Password', 250);
			$table->string('U_Login', 250);
			$table->string('U_Phone', 20);
			$table->string('U_Address', 250);
			$table->string('U_ZipCode', 5);
			$table->string('U_City', 250);
			$table->string('U_Mail', 250);
			$table->integer('U_Age');
			$table->string('U_GoogleId', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('u_user');
	}

}
