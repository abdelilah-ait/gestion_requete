<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('IDServiceTraitant');
			$table->string('Libcourt', 10);
			$table->string('LibLong', 80);
			$table->string('Password', 8);
			$table->string('Email', 60)->unique();
			$table->integer('NumPS', 4, false, true);
			$table->string('slug');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
