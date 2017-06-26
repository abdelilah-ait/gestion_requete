<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class SousEntite extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sousentites';

	protected $primaryKey = 'IDSousEntite';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDSousEntite', 'IDEntite', 'LibSousEntite', 'slug'];

	public function entite()
    {
        return $this->belongsTo('gestion_requete\Entite', 'IDEntite');
    }

    public function requetes()
    {
        return $this->hasMany('gestion_requete\Requete','IDSousEntite','IDSousEntite');
    }

}
