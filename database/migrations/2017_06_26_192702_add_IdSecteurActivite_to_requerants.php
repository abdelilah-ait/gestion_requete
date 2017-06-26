<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdSecteurActiviteToRequerants extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('requerants', function (Blueprint $table) {
    		$table->integer('IdSecteurActivite', false, true);
    		
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
    		$table->dropColumn('IdSecteurActivite');
		});
	}

}
