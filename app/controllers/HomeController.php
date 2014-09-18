<?php
use Lobby\Forms\LobbyForm;

class HomeController extends BaseController {

    function __construct(LobbyForm $lobbyForm)
    {
        $this->lobbyForm = $lobbyForm;

    }

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

	public function showWelcome()
	{
		return View::make('hello');
	}

    public function contact()
    {
        $this->lobbyForm->validate(Input::all());
        Mail::send('emails.contacto', ['name' => Input::get('nombre'),'email' => Input::get('email'),'asunto' => Input::get('asunto'),'mensaje' => Input::get('mensaje')], function ($message) {
            $message->to('ventas-lobby33@cnumei.com.mx', Input::get('firstname'))->subject('Contacto Lobby');
        });

        return Redirect::back()->with('mensaje_request','<div style="margin: 10px 0px;text-align: center"><span class=success>Mensaje Enviado</span></div>');;
    }


}
