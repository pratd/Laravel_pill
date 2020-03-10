<?php

namespace laravel_project\Http\Controllers;

use Illuminate\Http\Request;
use laravel_project\TempUser;
use laravel_project\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
class ContactFormController extends Controller
{
    public function create(){
        return view('contact/create');
    }

    public function store(){
        $data= request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' =>'required',
        ]);

        //send an email
        Mail::to('test@test.com')->send(new ContactFormMail($data));
        //dd(request()->all());

        return redirect('contact')->with('message','Thanks for your message. We\'ll be in touch.');
    }
}
