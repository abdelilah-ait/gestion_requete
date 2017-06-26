<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

Route::get('/', [
	'as' => 'home',
	'uses' => 'RequeteController@index'
	/*'middleware'=>'auth'*/]);

Route::get('/wali', [
	'as' => 'wali',
	'uses' => 'RequeteController@indexw'
	/*'middleware'=>'auth'*/]);

Route::get('entites/{id}/sousentites', [
	'as' => 'sousentites',
	'uses' => 'RequeteController@get_sousentites'
	/*'middleware'=>'auth'*/]);

Route::get('themes/{id}/sousthemes', [
	'as' => 'sousthemes',
	'uses' => 'RequeteController@get_sousthemes'
	/*'middleware'=>'auth'*/]);

Route::get('auth/login', [
	'as' => 'login',
	'uses' => 'Auth\AuthController@getLogin'
	/*'middleware'=>'auth'*/]);

Route::post('/validatelogin', [
	'as' => 'validatelogin',
	'uses' => 'Auth\AuthController@postLogin'
	/*'middleware'=>'auth'*/]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
	/*'middleware'=>'auth'*/]);

Route::post('/createrequete', [
	'as' => 'createrequete',
	'uses' => 'RequeteController@store'
	/*'middleware'=>'auth'*/]);

Route::get('/admin',[
		'as' => 'adminhome',
		'uses' => 'AdminController@index'
	]);

Route::post('/admin/create_theme',[
		'as' => 'createtheme',
		'uses' => 'AdminController@createtheme'
	]);


/*Route::get('/', [
	'as' => 'listLink',
	'uses' => 'LinkController@listLink']);
Route::get('/show/{slug}',[
	'as' => 'showLink',
	'uses' => 'LinkController@showLink']);
Route::get('/add', [
	'as' => 'addLink',
	'uses' => 'LinkController@addLink']);
Route::get('/all.json', 'LinkController@allJson');
Route::post('/create', [
	'as' => 'createLink',
	'uses' => 'LinkController@createLink']);
Route::get('/delete/{slug}',[
	'as' => 'deleteLink',
	'uses' => 'LinkController@deleteLink']);
Route::match(['get', 'post'], '/update/{slug}',[
	'as' => 'updateLink',
	'uses' => 'LinkController@updateLink']);

Route::get('/login',[
	'as' => 'login',
	'uses' => 'Auth\AuthController@getLogin']);

Route::match(['get', 'post'], '/register',[
	'as' => 'register',
	'uses' => 'Auth\AuthController@getRegister']);
*/
