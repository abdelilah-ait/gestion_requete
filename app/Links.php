<?php namespace gestion_requete;

use Illuminate\Database\Eloquent\Model;

class Links extends Model {

	protected $fillable = ['name', 'link', 'description', 'slug'];

}
