<?php namespace gestion_requete\Http\Controllers\Auth;

use gestion_requete\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use gestion_requete\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function getLogin()
	{
		return view('../auth/login');
	}

	/*public function getRegister(Request $request)
	{
		if($request->isMethod('post')){
			$parameters = $request->except(['_token']);
			$user = new User();
			$date = new \DateTime(null);
			$user->name = $parameters['name'];
			$user->email = $parameters['email'];
			$user->password =encrypt($parameters['password']);
			$user->slug = Str::slug($parameters['name'] . $date->format('dmYhis'));

			$user->save();

			return redirect()->route('listLink')->with('success', 'Ajout avec succès');
		}
		return view('../auth/register');
	}*/
}
