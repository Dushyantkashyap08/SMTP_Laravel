<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendEmail(Request $request)
    {
        $user=$request->get('email');
        $mailData = [
            'title' => 'Mail from Dushyant',
            'body' => 'This is testing email using SMTP',
        ];

        Mail::to($user)->send(new DemoMail($mailData));


        dd('Email sent successfully');
    }
}
