<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAAgentsEEstatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('a_agents_e_estates', function(Blueprint $table)
		{
			$table->integer('U_id');
			$table->integer('E_Id')->index('a_agents_e_estates_E_Estates0_FK');
			$table->primary(['U_id','E_Id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('a_agents_e_estates');
	}

}
