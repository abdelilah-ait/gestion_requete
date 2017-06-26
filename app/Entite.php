<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Entite extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'entites';

	protected $primaryKey = 'IDEntite';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDEntite', 'LibEntite', 'slug'];

	public function requetes()
    {
        return $this->hasMany('gestion_requete\Requete','IDEntite','IDEntite');
    }

    public function sousentites()
    {
        return $this->hasMany('gestion_requete\SousEntite', 'IDEntite', 'IDEntite');
    }
}
