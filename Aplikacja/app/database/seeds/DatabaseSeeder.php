<?php
/**
* Seeder DatabaseSeeder
* 
* Runs other seeders
*/

/**
* Class DatabaseSeeder
* 
* Runs other seeders
*/
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		
//require_once 'CountriesTableSeeder.php';
		$this->call('TestTableSeeder');
		$this->call('CountriesTableSeeder');
		$this->call('LanguagesTableSeeder');
		$this->call('OthersSeeder');
	}

}
