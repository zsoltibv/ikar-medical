<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request){
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'diagnosis' => $request->diagnosis,
            'message' => $request->message
        ];

        Mail::to('office@ikarmed.ro')->send(new EmailController($details));
        return Redirect::to(URL::previous() . "#contact-form")->with('message_sent', 'Your message has been sent succesfully!');
    }
}
