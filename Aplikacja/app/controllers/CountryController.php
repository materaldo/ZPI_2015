<?php
/**
* Controller CountryController
* 
* Contains methods used for countries management
*/

/**
 * CountryController Class
 *
 * Implements actions regarding countries management
 */
class CountryController extends BaseController {

	/**
     * Displays the list of countries
     *
	 * @return View returns view containing the list of the countries
     */
	public function getIndex()
	{
		return View::make('countries.countries');
	}
	
	/**
     * Displays the form for country creation
     *
     * @return View returns view containing the form for country creation
     */
	public function getNew()
	{
		return View::make('countries.add');
	}
	
	/**
     * Saves new country and redirects to the list of the countries
     *
     * @return View returns view containing the list of the countries
     */
	public function getAdd()
	{
		$co = Input::get('country');
		
		$country = new Country();
		$country->country = $co;
		
		$country->save();
		return View::make('countries.countries');
	}
	
	/**
     * Deletes selected country
     *
	 * @param integer $id ID of the country
	 *
     * @return View returns view containing the list of the countries
     */
	public function getDelete($id)
	{
		if($id>0)
		{
			$country = Country::find($id);
			$country->delete();
		}
		return View::make('countries.countries');
	}
	
	/**
     * Displays edit form for selected country
	 *
	 * @param integer $id ID of the selected country
	 *
     * @return View returns view containing edit form
     */
	public function getEdit($id)
	{
		return View::make('coutries.edit')->with('idC', $id);
	}
	
	/**
     * Updates selected country
     *
	 * @param integer $id ID of the country
	 *
     * @return View returns view containing the list of the countries
     */
	public function getConfirm($id)
	{
		$co = Input::get('country');
		
		Country::where('id', $id)->update(array(
			'country'=>$co,
			));
		
		return View::make('countries.countries');	
	}
}
