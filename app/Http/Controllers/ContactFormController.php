<?php

namespace App\Http\Controllers;
use App\Notifications\ContactFormAck;
use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index(){
        return view('contact.index');
    }

    public function handleContactForm(ContactFormRequest $formRequest, Recipient $recipient){
        $recipient->notify(new ContactFormAck($formRequest));

        return redirect()->back()->with('message', 'Thank you for your message.');
    }
}
