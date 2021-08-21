<?php

namespace App\Http\Controllers;
use App\Notifications\ContactFormMessage;
use App\Http\Requests\ContactFormRequest;
use App\Models\Recipient;

class ContactFormController extends Controller {
    /**
     * Returns the contact form view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        return view('contact.index');
    }

    /**
     * Handles the submission of the contact form.
     * @param ContactFormRequest $formRequest
     * @param Recipient $recipient
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleContactForm(ContactFormRequest $formRequest, Recipient $recipient){
        $recipient->notify(new ContactFormMessage($formRequest));

        return redirect()->back()->with('message', 'Thank you for your message.');
    }
}
