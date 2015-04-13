<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupynoclegoweTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupynoclegowe', function($table)
		{
			$table->increments('id');
			$table->integer('grupa_id')->unsigned();
			$table->foreign('grupa_id')->references('id')->on('grupy');
			$table->integer('nocleg_id')->unsigned();
			$table->foreign('nocleg_id')->references('id')->on('noclegi');
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
		Schema::drop('grupynoclegowe');
	}

}
