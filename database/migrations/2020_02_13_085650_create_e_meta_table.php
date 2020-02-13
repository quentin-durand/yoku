<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('e_meta', function(Blueprint $table)
		{
			$table->integer('M_Id', true);
			$table->string('M_EstateKey', 250);
			$table->string('M_EstateValue', 250);
			$table->integer('E_Id')->index('E_Meta_E_Estates_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('e_meta');
	}

}
