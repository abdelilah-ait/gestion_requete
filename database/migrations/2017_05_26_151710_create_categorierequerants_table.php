<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorierequerantsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categorierequerants', function(Blueprint $table)
		{
			$table->increments('IDCategorieRequerant');
			$table->integer('IDTypeRequerant', false, true);
			$table->string('LibCategorie', 50);
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
		Schema::drop('categorierequerants');
	}

}
