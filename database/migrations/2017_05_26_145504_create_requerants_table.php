<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequerantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requerants', function(Blueprint $table)
		{
			$table->increments('IDRequerant');
			$table->integer('IDTypeRequerant', false, true);
			$table->integer('IDCategorieRequerant', false, true);
			$table->integer('IDRequete', false, true);
			$table->string('NomCompletFR', 50);
			$table->string('NomCompletAR', 50);
			$table->integer('CIN')->unsigned();
			$table->string('Sexe', false, true)->length(10);
			$table->integer('Tel', false, true)->length(14);
			$table->string('Adresse', 120);
			$table->string('Email', 60)->unique();
			$table->string('Nationalite', 50);
			$table->string('RaisonSocial', 60);
			$table->integer('Fax', false, true)->length(14);
			$table->string('Representant', 50);
			$table->string('slug');
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
		Schema::drop('requerants');
	}

}
