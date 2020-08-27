<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Contactrequest;
use App\Mail\Contactmessagecreated;
use Illuminate\Support\Facades\Mail;

class contactscontroller extends Controller
{
    public function create(){
       return view('contacts.create');
    }
    public function store(Contactrequest $request){
     
        $Mailable=new Contactmessagecreated($request->name,$request->email,$request->message);
       \Mail::to('pfincycle@gmail.com')->send($Mailable);
       return redirect('contact')->with('message','Votre message a bien été envoyé');
      
   }
   
     
}
