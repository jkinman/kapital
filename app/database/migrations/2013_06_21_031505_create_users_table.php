<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// make the users table
		Schema::create('users', function($t)
		{
			$t->increments('id')->unique();
			$t->string('name');
			$t->string('password');
			$t->string('email');
			$t->text('bio');
			$t->string('picture');
			$t->integer('last_activity');
			$t->timestamps();
			$t->softDeletes();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}