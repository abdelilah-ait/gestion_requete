<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Entite extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'entites';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDEntite', 'LibEntite', 'slug'];

}
