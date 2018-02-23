<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Accueil
Route::get('/', [ 
	'as' => 'home_path',
	'uses' => 'PagesController@home'
]);


//A propos de Podbantou
Route::get('/a-propos-de-podbantou', [ 
	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);

//Contact
Route::get('/contact', [ 
	'as' => 'contact_path',
	'uses' => 'ContactsController@create'
]);

//Contact soumission
Route::post('/contact', [ 
	'as' => 'contact_path',
	'uses' => 'ContactsController@store'
]);


//See the registration page
Route::get('/inscription', [ 
	'as' => 'registration_path',
	'uses' => 'RegisterController@index'
]);

//Inscription submit
Route::post('/inscription', [ 
	'as' => 'registration_path',
	'uses' => 'RegisterController@register'
]);

//Inscription submit
Route::get('/confirm/{id}/{token}', [ 
	'as' => 'confirm_register_path',
	'uses' => 'RegisterController@confirm'
]);

//See the login page
Route::get('/connexion', [ 
	'as' => 'login_path',
	'uses' => 'LogController@index'
]);

//login submit
Route::post('/connexion', [ 
	'as' => 'login_path',
	'uses' => 'LogController@login'
]);

//logout
Route::get('/logout', [ 
	'as' => 'logout_path',
	'uses' => 'LogController@logout'
]);

//See the profil page
Route::get('/profil', [ 
	'as' => 'profil_path',
	'uses' => 'MemberController@index'
]);

//Route::get('/home', 'HomeController@index')->name('home');
