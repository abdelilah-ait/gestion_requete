<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Requerant extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'requerants';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDRequerant', 'IDTypeRequerant', 'IDCategorieRequerant', 'IDRequete','NomCompletFR', 'NomCompletAR', 'CIN', 'Sexe', 'Tel','Adresse', 'Email', 'Nationalite', 'RaisonSocial', 'Fax', 'Representant', 'slug' ];

}
