<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Requete extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'requetes';

    protected $primaryKey = 'IDRequete';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDRequete', 'IDEntite', 'IDSousEntite', 'IDTheme','IDSousTheme', 'NumOrdre', 'NumCSTR', 'DateBO', 'DateCSTR','ObjetReq', 'Resume', 'ContreQui', 'slug'];

	public function traitements()
    {
        return $this->hasMany('gestion_requete\Traitement','IDRequete','IDRequete');
    }

    public function users()
    {
        return $this->belongsToMany('gestion_requete\User','servicetraitant_requete','IDRequete','IdServiceTraitant');
    }

    public function statuts()
    {
        return $this->belongsToMany('gestion_requete\Statut','requete_statut','IDRequete','IDStatut');
    }

    public function sousentite()
    {
        return $this->belongsTo('App\SousEntite');
    }

    public function entite()
    {
        return $this->belongsTo('App\Entite');
    }

    public function theme()
    {
        return $this->belongsTo('App\Theme');
    }

    public function soustheme()
    {
        return $this->belongsTo('App\SousTheme');
    }

    public function requerant()
    {
        return $this->belongsTo('App\Requerant');
    }


}
