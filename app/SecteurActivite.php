<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class SecteurActivite extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'secteur_activites';

	protected $primaryKey = 'IdSecteurActivite';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IdSecteurActivite', 'Secteur_activite', 'slug'];

	public function requerants()
    {
        return $this->hasMany('gestion_requete\Requerant','IdSecteurActivite','IdSecteurActivite');
    }

}
