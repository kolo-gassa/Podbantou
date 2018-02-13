<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //action appelée pour nous contacter
    public function create()
    {
        return view('contacts.create');
    }


    //action appelée lors de la soumission du formulaire de contact
    public function store(Request $request)
    {
       $this->validate($request, [
       		'name' => 'required|min:3',
       		'email' => 'required|email',
       		'message' => 'required|min:10'
       ]);
    }
}
