<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdresserepresentantToRequerants extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('requerants', function (Blueprint $table) {
    		$table->string('adresse_representant', 120);
    		
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
    		$table->dropColumn('adresse_representant');
		});
	}

}
