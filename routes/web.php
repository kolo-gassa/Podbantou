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

use App\Mail\ContactMessage;


//Accueil
Route::get('/', [ 
	'as' => 'home_path',
	'uses' => 'PagesController@home'
]);

//Test email
Route::get('/test-email', function(){
		return new ContactMessage("Freddy Guenengafo", "freddy@yahoo.fr", "Le travail paye");
});

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