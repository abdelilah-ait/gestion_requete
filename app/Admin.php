<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admins';

	protected $primaryKey = 'IdAdmin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['IdAdmin','name', 'email', 'password'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

}
