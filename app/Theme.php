<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'themes';

	protected $primaryKey = 'IDTheme';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDTheme', 'LibTheme', 'slug'];

	public function requetes()
    {
        return $this->hasMany('gestion_requete\Requete','IDTheme','IDTheme');
    }

    public function sousthemes()
    {
        return $this->hasMany('gestion_requete\SousTheme','IDTheme','IDTheme');
    }
}
