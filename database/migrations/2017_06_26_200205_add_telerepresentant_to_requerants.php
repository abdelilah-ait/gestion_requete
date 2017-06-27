<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTelerepresentantToRequerants extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('requerants', function (Blueprint $table) {
    		$table->integer('tele_representant', false, true)->length(14);
    		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('requerants', function (Blueprint $table) {
    		$table->dropColumn('tele_representant');
		});
	}

}
