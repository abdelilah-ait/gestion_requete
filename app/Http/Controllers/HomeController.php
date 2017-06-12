<?php namespace gestion_requete\Http\Controllers;

use Illuminate\Http\Request;
use gestion_requete\Theme;
use gestion_requete\Entite;
use gestion_requete\CategorieRequerant;

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

	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }
	
	public function index(Request $request)
	{
		$themes = Theme::all();
		$entites = Entite::all();
		$categorierequerants = CategorieRequerant::where('IDTypeRequerant','=',1)->get();
		return view('visual/home', compact('themes','entites','categorierequerants'));
		// return view('visual/home');
	}

	public function createrequete(Request $request)
	{
		return view('visual/createsuccess');
		
	}

	public function soustheme($id)
	{
		$theme = Theme::find($id);
		die($id);
		$sousthemes = $theme->sousthemes;

		return response()->json(['response' => $sousthemes]);
	}

	/*public function test($name)
	{
		return view('test');
	}*/
}
