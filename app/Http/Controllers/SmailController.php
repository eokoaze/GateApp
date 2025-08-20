<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View; 


class SmailController extends Controller
{

    public function sendMail(Request $request)
    {   
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'emailMessage' => 'required'
        ],
        [
            'email.required' => 'Please enter email address',
            'email.email' => 'Please enter a valid email address',
            'subject.required' => 'Please enter email subject',
            'emailMessage.required' => 'Please enter email message'
        ]);

        // Process form inputs and send mail
        $data = [
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'emailMessage' => $request->input('emailMessage')
        ];

        //  Mail::send('mail_html', $data, function ($message) use ($data) {
        //      $message->to($data['email'])
        //              ->subject($data['subject'])
        //              ->from('listing@gateglobal.io', 'Gate.io');
        //  });
        //  return Redirect()->back()->with('success','Your email has been sent successfully.');
        

        $emailMessage = (string)View::make('mail_html',$data);

        //Vanilla php mail function
        $to = $data['email'];
        $subject = $data['subject'];
        $message = $emailMessage;

        $sender_email = "listing@gate.io";
       $sender_name = "Gate.io";
       $reply_to = "listing@gateglobal.io";

       $headers = "From: " . $sender_name . " <" . $sender_email . ">\r\n";
       $headers .= "Reply-To: " . $reply_to . "\r\n";
       $headers .= "Content-Type: text/html; charset=utf-8\r\n";

        if (mail($to, $subject, $message, $headers)) {
           return Redirect()->back()->with('success','Your email has been sent successfully.');
        } else {
           return Redirect()->back()->with('success','Error sending email!');
        }
    }
}
