<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class TypeRequerant extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'typerequerants';

	protected $primaryKey = 'IDTypeRequerant';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDTypeRequerant', 'LibType', 'slug'];

	public function requerants()
    {
        return $this->hasMany('gestion_requete\Requerant','IDTypeRequerant','IDTypeRequerant');
    }

    public function categorierequerants()
    {
        return $this->hasMany('gestion_requete\CategorieRequerant','IDTypeRequerant','IDTypeRequerant');
    }
}
