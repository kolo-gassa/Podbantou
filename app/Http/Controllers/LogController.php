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

class LogController extends Controller
{
    //action appelée pour nous contacter
    public function index()
    {
        return view('pages.login');
    }


    //action appelée lors de la soumission du formulaire de contact
    public function login()
    {
       $inputs = Input::all();

       $inputs['email'] = e($inputs['email']);
       $inputs['password'] = e($inputs['password']);

       $validation = Validator::make($inputs, [
          'email' => 'required|email',
          'password' => 'required',
        ]);

       if($validation->fails()){
          return Redirect::back()->withErrors($validation);
       }
       else{
          if(Auth::attempt(
            [
             'email' => $inputs['email'],
             'password' => $inputs['password']
            ]
          )){
              Auth::attempt(['email' => $inputs['email'],'password' => $inputs['password']]);
              flashy('Bienvenue parmi nous');
              return redirect('/profil');
          }
          else{
            return redirect('/connexion')->with('error',
                "Le mot de passe ou le nom d'utilisateur est incorrect");
          }
       }
    }


    public function logout(){
       Auth::logout();
       return redirect('/');
    }
}
