<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
// mail
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
  
        try {
            Mail::to('goodliferwanda@gmail.com')->send(new ContactFormMail($details));
            return back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'There was an error sending your message. Please try again later.');
        }
    }
}
