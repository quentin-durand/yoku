<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHasModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('has_modules', function(Blueprint $table)
		{
			$table->integer('U_id');
			$table->integer('M_Id')->index('Has_modules_M_Modules0_FK');
			$table->primary(['U_id','M_Id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('has_modules');
	}

}
