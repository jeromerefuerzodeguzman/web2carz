<?php

use Illuminate\Database\Migrations\Migration;

class AddSourceIdField extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('records', function($table){
			$table->string('source_id', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('records', function($table){
			$table->dropColumn('source_id');
		});
	}

}