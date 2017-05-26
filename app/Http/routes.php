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
	'uses' => 'HomeController@index']);
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
