<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendMessageRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContactMessage;

class ContactsController extends Controller
{
    public function contact(SendMessageRequest $request)
    {
        $data = array(
            'name'      =>  $request->name,
            'message'   =>  $request->message,
            'subject'   =>  $request->subject,
            'email'     =>  $request->email,
        );

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new SendContactMessage($data));
        return back()->with('message', 'Your message has been sent, thanks for contacting us!');
    }
}
