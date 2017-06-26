<?php namespace gestion_requete;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $primaryKey = 'IdServiceTraitant';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['IdServiceTraitant', 'email', 'login', 'libcourt', 'liblong', 'password', 'numps', 'slug'];
	
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	 public function traitements()
    {
        return $this->hasMany('gestion_requete\Traitement','IdServiceTraitant','IdServiceTraitant');
    }

    public function requetes()
    {
        return $this->belongsToMany('gestion_requete\Requete','servicetraitant_requete','IdServiceTraitant','IDRequete');
    }




}
