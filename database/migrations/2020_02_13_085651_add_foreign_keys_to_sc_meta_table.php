<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToScMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sc_meta', function(Blueprint $table)
		{
			$table->foreign('SC_Id', 'SC_Meta_SC_Schedules_FK')->references('SC_Id')->on('sc_schedules')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sc_meta', function(Blueprint $table)
		{
			$table->dropForeign('SC_Meta_SC_Schedules_FK');
		});
	}

}
