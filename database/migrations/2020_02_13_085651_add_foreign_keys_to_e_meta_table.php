<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('e_meta', function(Blueprint $table)
		{
			$table->foreign('E_Id', 'E_Meta_E_Estates_FK')->references('E_Id')->on('e_estates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('e_meta', function(Blueprint $table)
		{
			$table->dropForeign('E_Meta_E_Estates_FK');
		});
	}

}
