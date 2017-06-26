<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Requerant extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'requerants';

	protected $primaryKey = 'IDRequerant';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDRequerant', 'IDTypeRequerant', 'IDCategorieRequerant', 'IDRequete','NomCompletFR', 'NomCompletAR', 'CIN', 'Sexe', 'Tel','Adresse', 'Email', 'Nationalite', 'RaisonSocial', 'Fax', 'Representant', 'slug' ];

	public function requetes()
    {
        return $this->hasMany('gestion_requete\Requete','IDRequerant','IDRequerant');
    }

    public function typerequerant()
    {
        return $this->belongsTo('gestion_requete\TypeRequerant','IDTypeRequerant');
    }

    public function categorierequerant()
    {
        return $this->belongsTo('App\CategorieRequerant','IDCategorieRequerant');
    }

    public function secteur_activites()
    {
        return $this->belongsTo('App\SecteurActivite','IdSecteurActivite');
    }
}
