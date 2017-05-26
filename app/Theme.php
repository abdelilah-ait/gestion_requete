<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'themes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDTheme', 'LibTheme', 'slug'];


}
