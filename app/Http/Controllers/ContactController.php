<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function store()
    {
        $contact_from=request()->all();
        Mail::to('mehedituhsar@gmail.com')->send(new ContactFormMail($contact_from));
        return redirect()->route('user.contact')->with('success','Your message has been submitted successfully');
    }

}
