<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequeteStatutTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requete_statut', function(Blueprint $table)
		{
			$table->increments('IDRequete_Statut');
			$table->integer('IDRequete', false, true);
			$table->integer('IdStatut', false, true);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('requete_statut');
	}

}
