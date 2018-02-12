<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	//action appelée pour afficher la page accueil "welcome"
    public function home()
    {
    	return view('pages.home');
    }


    //action appelée pour afficher la page "A propos de nous"
    public function about()
    {
    	return view('pages.about');
    }

}
