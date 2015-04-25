<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	
	public function getIndex()
	{
		return View::make('pl.index');
	}
	public function getAbout()
	{
		return View::make('pl.about');
	}
	public function getContact()
	{
		return View::make('pl.contact');
	}
	public function getLogin()
	{
		return View::make('pl.login');
	}
	public function getRegistration()
	{
		return View::make('pl.registration');
	}
	public function getSearch()
	{
		return View::make('pl.search');
	}
	public function getResults()
	{
		return View::make('pl.search_results');
	}
	public function getManagement()
	{
		return View::make('pl.management');
	}
		public function getSkrypt()
	{
		//utworzenie ról
		$adminRole = new Role;
		$adminRole->name = 'Admin';
		$adminRole->save();
		
		$organizerRole = new Role;
		$organizerRole->name = 'Organizer';
		$organizerRole->save();

		$protectorRole = new Role;
		$protectorRole->name = 'Protector';
		$protectorRole->save();
		
		$participantRole = new Role;
		$participantRole->name = 'Participant';
		$participantRole->save();
		
		//utworzenie przykładowych użytkowników
		$admin = new User;
		$admin->username = 'admin';
        $admin->email = 'admin@testowyemail.pl';
        $admin->password = 'admin123';
        $admin->password_confirmation = 'admin123';
        $admin->confirmation_code = md5(uniqid(mt_rand(), true));
        $admin->confirmed = 1;

        if(! $admin->save()) {
            Log::info('Unable to create user '.$admin->email, (array)$admin->errors());
        } else {
            Log::info('Created user '.$admin->email);
        }
		
		$organizer = new User;
		$organizer->username='organizer';
        $organizer->email = 'organizer@testowyemail.pl';
        $organizer->password = 'organizer123';
        $organizer->password_confirmation = 'organizer123';
        $organizer->confirmation_code = md5(uniqid(mt_rand(), true));
        $organizer->confirmed = 1;

        if(! $organizer->save()) {
            Log::info('Unable to create user '.$organizer->email, (array)$organizer->errors());
        } else {
            Log::info('Created user '.$organizer->email);
        }
		
		$protector = new User;
		$protector->username = 'protector';
        $protector->email = 'protector@testowyemail.pl';
        $protector->password = 'protector123';
        $protector->password_confirmation = 'protector123';
        $protector->confirmation_code = md5(uniqid(mt_rand(), true));
        $protector->confirmed = 1;

        if(! $protector->save()) {
            Log::info('Unable to create user '.$protector->email, (array)$protector->errors());
        } else {
            Log::info('Created user '.$protector->email);
        }
		
		$participant = new User;
		$participant->username = 'participant';
        $participant->email = 'participant@testowyemail.pl';
        $participant->password = 'participant123';
        $participant->password_confirmation = 'participant123';
        $participant->confirmation_code = md5(uniqid(mt_rand(), true));
        $participant->confirmed = 1;

        if(! $participant->save()) {
            Log::info('Unable to create user '.$participant->email, (array)$participant->errors());
        } else {
            Log::info('Created user '.$participant->email);
        }
		
		//przypisanie ról
		$admin->attachRole($adminRole);
		$organizer->attachRole($organizerRole);
		$protector->attachRole($protectorRole);
		$participant->attachRole($participantRole);
	}
}
