<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class SousTheme extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sousthemes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDSousTheme', 'IDTheme', 'LibSousTheme', 'slug'];


}
