<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraitementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('traitements', function(Blueprint $table)
		{
			$table->increments('IDTraitement');
			$table->integer('IDServiceTraitant', false, true);
			$table->integer('IDRequete', false, true);
			$table->string('Consistance', 150);
			$table->datetime('DateTraitement');
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
		Schema::drop('traitements');
	}

}
