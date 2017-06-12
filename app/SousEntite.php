<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class SousEntite extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sousentites';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDSousEntite', 'IDEntite', 'LibSousEntite', 'slug'];

	public function entite()
    {
        return $this->belongsTo('App\Entite');
    }

    public function requetes()
    {
        return $this->hasMany('App\Requete');
    }

}
