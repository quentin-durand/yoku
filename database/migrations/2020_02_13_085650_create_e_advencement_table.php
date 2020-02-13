<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEAdvencementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('e_advencement', function(Blueprint $table)
		{
			$table->integer('A_Id', true);
			$table->decimal('A_PriceProposal', 10, 0);
			$table->text('A_Note', 65535);
			$table->integer('E_Id')->index('E_Advencement_E_Estates_FK');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('e_advencement');
	}

}
