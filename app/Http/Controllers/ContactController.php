<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
    
        $contact = new Contact([
            'contact_name' => $request->name,
            'contact_email' => $request->email,
            'contact_phone' => $request->phone,
            'contact_date' => now()->toDateString(),
            'subject' => $request->subject,
            'comment' => $request->message,
        ]);
    
        $contact->save();
    
        $message = "Form submitted successfully!";
    
        // Redirect and show feedback
        return redirect()->route('contact.index')->with('success', $message);
    }
}
