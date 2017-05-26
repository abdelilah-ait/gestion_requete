<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequetesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requetes', function(Blueprint $table)
		{
			$table->increments('IDRequete');
			$table->integer('IDEntite', false, true);
			$table->integer('IDSousEntite', false, true);
			$table->integer('IDTheme', false, true);
			$table->integer('IDSousTheme', false, true);
			$table->string('NumOrdre', 80)->unique();
			$table->string('NumCSTR', 80)->unique();
			$table->datetime('DateBO');
			$table->datetime('DateCSTR');
			$table->string('ObjetReq', 100);
			$table->string('Resume', 159);
			$table->string('ContreQui', 50);
			$table->string('Importance', 50);
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
		Schema::drop('requetes');
	}

}
