<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {
            $website = $request->website;
            $msg = $request->message;
            $wholeMsg = "Website: $website<br><br> $msg";
            Mail::raw($wholeMsg, function ($message) use ($request) {
                $message->to('plazajosue2@gmail.com');
                $message->from($request->email, $request->name);
                $message->subject('CUSTOMER CONSULTANT REQUEST ');
            });
            $data = [
                'message' => 'Your message was successfully sent. We\'ll get in touch with you within 24 hours.',
                'success' => true,
                'error' => false
            ];
        } catch (Exception $e) {
            $data = [
                'message' => 'Our apologies, we\'re having a server issue. Please email us directly at hello@limeadelabs.com.',
                'error' => true,
                'success' => false
            ];
        }


        return view('home')->with($data);
    }
}
