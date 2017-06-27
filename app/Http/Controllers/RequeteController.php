<?php namespace gestion_requete\Http\Controllers;

use gestion_requete\Http\Requests;
use gestion_requete\Http\Controllers\Controller;
use gestion_requete\Theme;
use gestion_requete\Entite;
use gestion_requete\TypeRequerant;
use gestion_requete\CategorieRequerant;
use gestion_requete\Statut;
use gestion_requete\SecteurActivite;
use gestion_requete\Requete;

use Illuminate\Http\Request;

class RequeteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }
	
	public function index(Request $request)
	{
		$themes = Theme::all();
		$entites = Entite::all();
		$typerequerants = TypeRequerant::all();
		$categorierequerants_pp = CategorieRequerant::where('IDTypeRequerant','=',1)->get();
		$categorierequerants_mm = CategorieRequerant::where('IDTypeRequerant','=',2)->get();
		$categorierequerants_cc = CategorieRequerant::where('IDTypeRequerant','=',3)->get();
		$statuts = Statut::all();
		$secteur_activites = SecteurActivite::all();
		return view('visual/home', compact('themes','entites','typerequerants','categorierequerants','categorierequerants_pp','categorierequerants_mm','categorierequerants_cc','statuts','secteur_activites'));
		 return view('visual/esp_wali');
	}
	public function indexw(Request $request)
	{
		 return view('visual/esp_wali');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		
		//     $user = User::create([
		//         'first_name' => $data['first_name'],
		//         'last_name' => $data['last_name'],
		//         'email' => $data['email'],
		//         'password' => bcrypt($data['password']),
		//     ]);

		//     $business = Business::create([
		//         'name' => 'best business ever'
		//     ]);

		//     $business->owners()->sync([$user->id]);

		//     return $user;

		$new_num_cstr = $request['requete']['NumCSTR']."/".$request['requete']['annee'];


		$attributes = $request->all();
		$attributes['requete']['NumCSTR'] = $new_num_cstr;

		// die($attributes['requete']['NumCSTR']);

		Requete::create($attributes['requete']);

		// $request['requete']->merge(array('NumCSTR' => implode("/", [$request['requete']['NumCSTR'], $request['requete']['annee']])));

		// $requete = new Requete();
		// $requete->NumCSTR = $request->input('numcstr');
		// $requete->NumOrdre = $request->input('numordre');
		// $requete->DateCSTR = $request->input('datearcstr');
		// $requete->DateBO = $request->input('datearbo');
		// $requete->ObjetReq = $request->input('objet');

		// return view('visual/createsuccess');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function get_sousentites($id)
	{
		$entite = Entite::find($id);
		
		$sousentites = $entite->sousentites;

		return response()->json(['sousentites' => $sousentites]);
	}

	public function get_sousthemes($id)
	{
		$theme = Theme::find($id);
		
		$sousthemes = $theme->sousthemes;

		return response()->json(['sousthemes' => $sousthemes]);
	}

}
