<?php
/**
* Migration for groups
*
* Representation of groups table schema in database
*/
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
* Class CreateGrupyTable
*
* Includes methods used to create and drop groups table
*/
class CreateGrupyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		
		Schema::create('groups', function($table)
		{
			$table->increments('id');
			$table->integer('number_of_people');
			$table->string('mean_of_transport')->nullable();
			$table->integer('id_prot')->unsigned();
			$table->foreign('id_prot')->references('id')->on('users');
			$table->integer('id_coun')->unsigned();
			$table->foreign('id_coun')->references('id')->on('countries');
			$table->integer('id_first_lang')->unsigned();
			$table->foreign('id_first_lang')->references('id')->on('languages');
			$table->integer('id_second_lang')->unsigned()->nullable();
			$table->foreign('id_second_lang')->references('id')->on('languages');
			$table->integer('id_third_lang')->unsigned()->nullable();
			$table->foreign('id_third_lang')->references('id')->on('languages');
			$table->boolean('confirmed')->default(false);
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
		Schema::drop('groups');
	}
}
