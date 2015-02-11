<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("users",function($table){
			$table->increments("id");
			$table->string("username",30);
			$table->string("fullname",50);
			$table->string("email",60)->unique();
			$table->string("password",60);
			$table->string("address",60);
			$table->string("city",30);
			$table->string("country",30);
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
		Schema::drop("users");
	}

}
