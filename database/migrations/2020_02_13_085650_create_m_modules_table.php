<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('m_modules', function(Blueprint $table)
		{
			$table->integer('M_Id', true);
			$table->string('M_Module', 50);
			$table->string('M_Description', 120);
			$table->dateTime('M_CreationDate');
			$table->dateTime('M_EditDate');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('m_modules');
	}

}
