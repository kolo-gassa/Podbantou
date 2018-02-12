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
}
