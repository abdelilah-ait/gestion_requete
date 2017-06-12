<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Requete extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'requetes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDRequete', 'IDEntite', 'IDSousEntite', 'IDTheme','IDSousTheme', 'NumOrdre', 'NumCSTR', 'DateBO', 'DateCSTR','ObjetReq', 'Resume', 'ContreQui', 'Importance', 'slug' ];

	public function traitements()
    {
        return $this->hasMany('App\Traitement');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
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
