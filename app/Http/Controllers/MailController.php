<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Dushyant',
            'body' => 'This is testing email using SMTP',
        ];

        Mail::to('himanshulpu1@gmail.com')->send(new DemoMail($mailData));


        dd('Email sent successfully');
    }
}
