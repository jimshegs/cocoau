<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests;
use App\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    protected $fields = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'message' => '',
    ];

    public function showForm()
    {
    	return view('pages.contact');
    }

    public function sendContactInfo(ContactMeRequest $request)
    {
    	$data = $request->only('name', 'email', 'phone');
    	$data['messageLines'] = explode("\n", $request->get('message'));

    	Mail::send('emails.contact', $data, function($message) use ($data) {
    		$message->to(config('blog.contact_email'))->subject('Website Contact Form: '.$data['name'])->replyTo($data['email']);
    	});

       $contact = new Contact();
        foreach (array_keys($this->fields) as $field) {
          $contact->$field = $request->get($field);
        }
        $contact->save();


    	return back()->withSuccess("Thank you for your message. It has been sent");
    }


}
