<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Mail\LandingPageContact;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     * @param Request $request
     * @param Contact $contact
     * @return mixed
     */
    public function create(Request $request, Contact $contact)
    {
         $this->validate($request, [
            'email' => 'bail|required|email|min:6|max:255',
            'message' => 'required|min:8|max:640'
        ]);

        $contact->create([
            'email' => $request->email,
            'message' => $request->message,
        ]);
        // $contact = Contact::last();
        // send email to mailgun, which will distribute to administrators
        // Mail::to('jeremy@defenestrator.tech')->send(new LandingPageContact($contact));
        return \Redirect::route('welcome')->with('success', 'Thanks! Expect a reply soon.' );
    }
}
