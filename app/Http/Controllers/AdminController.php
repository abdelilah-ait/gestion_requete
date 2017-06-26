<?php namespace gestion_requete\Http\Controllers;

use gestion_requete\Http\Requests;
use gestion_requete\Http\Controllers\Controller;

use gestion_requete\Theme;
use gestion_requete\SousTheme;
use gestion_requete\Entite;
use gestion_requete\SousEntite;
use gestion_requete\TypeRequerant;
use gestion_requete\CategorieRequerant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Input;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$themes = Theme::all();
		$sousthemes = SousTheme::all();
		$entites = Entite::all();
		$sousentites = SousEntite::all();
		$typerequerants = TypeRequerant::all();
		$categorierequerants = CategorieRequerant::all();
		return view('adminvisual/adminhome', compact('themes','sousthemes','entites','sousentites','typerequerants','categorierequerants'));
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

	public function createtheme(Request $request)
	{

				if($request->ajax()){
					$theme = new Theme();
	      			$theme->LibTheme = $request['libtheme'];
	      			$theme->save();
				};
    			return response()->json(['response' => 'success']);
      		    	// die($request['libtheme']);
      		// if($theme->save()){
      	

    	// }
		// dd($request->input());
		// $theme = new Theme();
		// $theme->LibTheme = $request->input('libtheme');
		// $theme->save();	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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

}
