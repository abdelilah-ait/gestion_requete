<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class CategorieRequerant extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categorierequerants';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDCategorieRequerant', 'IDTypeRequerant', 'LibCategorie', 'slug'];

	public function requerants()
    {
        return $this->hasMany('App\Requerant');
    }

    public function typerequerant()
    {
        return $this->belongsTo('App\TypeRequerant');
    }
}
