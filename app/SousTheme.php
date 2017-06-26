<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class SousTheme extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'sousthemes';

	protected $primaryKey = 'IDSousTheme';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDSousTheme', 'IDTheme', 'LibSousTheme', 'slug'];

	public function requetes()
    {
        return $this->hasMany('gestion_requete\Requete','IDSousTheme','IDSousTheme');
    }

    public function theme()
    {
        return $this->belongsTo('gestion_requete\Theme','IDTheme');
    }
}
