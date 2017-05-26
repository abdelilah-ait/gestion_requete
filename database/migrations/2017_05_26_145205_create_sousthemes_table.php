<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSousthemesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sousthemes', function(Blueprint $table)
		{
			$table->increments('IDSousTheme');
			$table->integer('IDTheme', false, true);
			$table->string('LibSousTheme', 60);
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
		Schema::drop('sousthemes');
	}

}
