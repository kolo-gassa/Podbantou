<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactsController extends Controller
{
    //action appelée pour nous contacter
    public function create()
    {
        return view('contacts.create');
    }


    //action appelée lors de la soumission du formulaire de contact
    public function store(ContactRequest $request)
    {
      new ContactMessage($request->name, $request->email, $request->message);
      
    }
}
