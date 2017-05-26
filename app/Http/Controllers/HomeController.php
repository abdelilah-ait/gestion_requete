<?php namespace gestion_requete\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('visual/home');
	}

	/*public function test($name)
	{
		return view('test');
	}*/
}
