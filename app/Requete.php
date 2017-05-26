<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Requete extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'requetes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDRequete', 'IDEntite', 'IDSousEntite', 'IDTheme','IDSousTheme', 'NumOrdre', 'NumCSTR', 'DateBO', 'DateCSTR','ObjetReq', 'Resume', 'ContreQui', 'Importance', 'slug' ];


}
