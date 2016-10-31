<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\MessageFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function index()
    {
    	$contacts = Contact::all();
    	return view('backend.message.index', compact('contacts'));
    }

    public function show($id)
    {
    	$contact = Contact::whereId($id)->firstOrFail();

    	return view('backend.message.show', compact('contact'));
    }

    public function reply($id)
    {
    	$contact = Contact::whereId($id)->firstOrFail();
    	return view('backend.message.reply', compact('contact'));
    }

    public function sendMessage(MessageFormRequest $request)
    {
    	$data = $request->only('subject', 'email');
    	$data['messageLines'] = explode("\n", $request->get('message'));

    	Mail::send('emails.reply', $data, function($message) use ($data) {
    		$message->to($data['email'])->subject($data['subject'])->replyTo(config('blog.contact_email'));
    	});


    	return back()->withSuccess("Thank you for your message. It has been sent");
    }
}
