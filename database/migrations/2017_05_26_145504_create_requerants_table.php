<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequerantTable extends Migration {

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
			$table->int('IDTypeRequerant');
			$table->int('IDCategorieRequerant');
			$table->int('IDRequete');
			$table->string('NomCompletFR', 50);
			$table->string('NomCompletAR', 50);
			$table->int('CIN');
			$table->string('Sexe', 10);
			$table->int('Tel', 14);
			$table->string('Adresse', 120);
			$table->string('Email', 60)->unique();
			$table->string('Nationalite', 50);
			$table->string('RaisonSocial', 60);
			$table->int('Fax', 14);
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
