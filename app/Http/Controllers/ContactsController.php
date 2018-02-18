<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
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

      $message = Message::create($request->only('name', 'email', 'message'));
      

      $mailable = new ContactMessage($message);  
      Mail::to(config('podbantou.admin_email'))->send($mailable);
      
       flashy('Nous vous repondons dans les plus brefs délais!');

       return redirect()->route('home_path');
    }
}

