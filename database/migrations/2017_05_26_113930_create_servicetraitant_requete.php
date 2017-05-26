<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicetraitantRequete extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicetraitant_requete', function(Blueprint $table)
		{
			$table->increments('IDServiceTraitant_Requete');
			$table->int('IDServiceTraitant');
			$table->int('IDRequete');
			$table->string('ConsignesWali', 80);
			$table->datetime('DateConsignesWali');
			$table->string('ConsignesSG', 80);
			$table->datetime('DateConsignesSG');
			$table->string('ConsignesDAI', 80);
			$table->datetime('DateConsignesDAI');
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
		Schema::drop('servicetraitant_requete');
	}

}
