<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'traitements';

	protected $primaryKey = 'IDTraitement';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IDTraitement', 'IDServiceTraitant', 'IDRequete', 'Consistance', 'DateTraitement', 'slug'];

	public function user()
    {
        return $this->belongsTo('gestion_requete\User','IdServiceTraitant');
    }

    public function requete()
    {
        return $this->belongsTo('gestion_requete\Requete','IDRequete');
    }


}
