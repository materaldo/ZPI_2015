<?php
/**
* Controller OrganizerController
* 
* Contains methods used for organizer management
*/

/**
* Class OrganizerController
* 
* Representation of data about accommodations
*/
class OrganizerController extends BaseController {

	/**
	* Display home page
	* @return view
	*/
	public function getIndex()
	{
		return View::make('index');
	}
	/**
	* Display view of message to protectors
	* @return view
	*/
	public function getMessage()
	{
		return View::make('organizers.message');
	}
	/**
	* function sends mail to all protectors 
	*@return view
	*/
	public function postMail()
	{
		$title = Input::get('title');
		$text = Input::get('emailText');
		$protectors=Protector::all();
		
		foreach ($protectors as $p)
		{
        Mail::queue('emails.protMessage', array('title' => $title, 'text' => $text), function($message) use ($p, $title)
        {
			$us=User::where('id','=',$p->id)->first();
            $message->to($us->email, '?')->subject($title);
		});
		}
		return View::make('index');
	}
}
