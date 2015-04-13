<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('grupy', function($table)
		{
			$table->increments('id');
			$table->integer('liczba_osob');
			$table->string('srodek_transportu');
			$table->integer('opiekun_id')->unsigned();
			$table->foreign('opiekun_id')->references('id')->on('opiekunowie');
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
		Schema::drop('grupy');
	}

}
