<?php namespace gestion_requete\Services;

use gestion_requete\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'email' => 'required|max:60|unique:users',
			'password' => 'required|confirmed|max:100',
			'libcourt' => 'required|max:10',
			'liblong' => 'required|max:80',
			'login' => 'required|max:10|unique:users',
			'numps' => 'required|max:4',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'email' => $data['email'],
			'login' => $data['login'],
			'password' => bcrypt($data['password']),
			'libcourt' => $data['libcourt'],
			'liblong' => $data['liblong'],
			'numps' => $data['numps'],
		]);
	}

}
