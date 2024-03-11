<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(){
        return view('contact');
    }
    function sendEmail(Request $req){
        $datalis=[
            'con_name' => $req->con_name,
            'con_email' => $req->con_email,
            'con_phone' => $req->con_phone,
            'con_message' => $req->con_message,
        ];
        Mail::to('benkhadra.iman@gmail.com')->send(new ContactMail($datalis));
        return back()->with('message_sent','Your Message has been sent successfuly');
     }

}
