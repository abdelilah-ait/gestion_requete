<?php
/*namespace gestion_requete\http\Controllers;
use Illuminate\Http\Request;
use gestion_requete\Links;
use Illuminate\Support\Str;

class LinkController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listLink()
	{
		$links = Links::all();
		return view('link/listLink')->with('links', $links);
	}

	public function showLink($slug)
	{
		$link = Links::where('slug', '=', $slug)->first();
		return view('link/showLink')->with('link', $link);
	}

	public function addLink()
	{
		return view('link/addLink');
	}

	public function deleteLink($slug)
	{
		$link = Links::where('slug', '=', $slug)->first();
		$link->delete();

		
		return redirect()->route('listLink')->with('success', 'suppression avec succès');
	}

	public function updateLink(Request $request, $slug)
	{
		$link = Links::where('slug', '=', $slug)->first();

		if($request->isMethod('post')){
			$parameters = $request->except(['_token']);

			$date = new \DateTime(null);
			$link->name = $parameters['name'];
			$link->link = $parameters['link'];
			$link->description = $parameters['description'];
			$link->slug = Str::slug($parameters['name'] . $date->format('dmYhis'));

			$link->save();

			return redirect()->route('listLink')->with('success', 'modification avec succès');
		}

		return view('link/addLink')->with('link', $link);
	}

	public function createLink(Request $request)
	{
		$parameters = $request->except(['_token']);

		// var_dump($parameters);
		// Links::create($parameters);

		$link = new Links();
		$date = new \DateTime(null);
		$link->name = $parameters['name'];
		$link->link = $parameters['link'];
		$link->description = $parameters['description'];
		$link->slug = Str::slug($parameters['name'] . $date->format('dmYhis'));

		$link->save();

		return redirect()->route('listLink')->with('success', 'Ajout avec succès');
	}

	public function allJson(Request $request)
	{
		$info = [
			['name' => 'Abdelilah'],
			['Age' => '22'],
			['sexe' => 'H']
		];
		return response()->json($info)->setCallback($request->input('callback'));
	}*/
}
