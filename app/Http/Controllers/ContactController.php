<?php

namespace App\Http\Controllers;
use App\Models\Submission;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserContactMail;
use App\Mail\AdminContactMail;

class ContactController extends Controller
{
    //
    public function showform(){
        return view('contact.contactform');
    }
    public function submitform(Request $request){
        $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|email|max:255',
            'subject'=> 'required|string|max:255',
            'message'=> 'required|string'
        ]);
        $submission = Submission::create($request->all());

        Mail::to($request->email)->send(new \App\Mail\UserContactMail($submission));
        Mail::to('geethuaravind5@gmail.com')->send(new AdminContactMail($submission));

        return redirect()->back()->with('success', 'Your message has been sent!');

    }
}
