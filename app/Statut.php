<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Statut extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'statuts';

    protected $primaryKey = 'IDStatut';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDStatut', 'Etat', 'slug' ];

	public function requetes()
    {
        return $this->belongsToMany('gestion_requete\Requete','requete_statut','IDStatut','IDRequete');
    }

}
