<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class MemberController extends Controller
{
    //action appelée pour nous contacter
    public function index()
    {
        if(Auth::check()){
            return view('members.profil');    
        }
        else{
            return redirect('/connexion');
        }
        
    }


    
}
