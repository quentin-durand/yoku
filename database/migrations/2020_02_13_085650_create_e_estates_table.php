<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEEstatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('e_estates', function(Blueprint $table)
		{
			$table->integer('E_Id', true);
			$table->dateTime('E_CreationDate');
			$table->dateTime('E_ModificationDate');
			$table->text('E_Description', 65535);
			$table->string('E_DescriptionTitle', 120);
			$table->boolean('E_Reserved');
			$table->integer('U_id')->index('E_Estates_U_User_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('e_estates');
	}

}
