<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    // public function index()
    // {
    //     return view('welcome');
    // }

    // public function sendEmail(Request $request)
    // {
    //     $user=$request->get('email');
    //     $mailData = [
    //         'title' => 'Mail from Dushyant',
    //         'body' => 'This is testing email using SMTP',
    //     ];

    //     Mail::to($user)->send(new DemoMail($mailData));


    //     dd('Email sent successfully');
    // }

    public function form()
    {
        return view ('welcome');
    }

    public function send(Request $request)
    {   
        $user=$request->get('mail');
        // $text=$request->get('text');
        // $image=$request->get('user');
    
        $mailData = [
                    'title' => 'Mail From Dushyant',
                    'body' => 'hi bro' ,
                ];
        
                // Mail::to($user)
                // ->cc('harbanskaur1602@gmail.com') // Add a recipient in the "Cc" field
                // ->bcc('dknov2000@gmail.com') // Add a recipient in the "Bcc" field
                // ->send(new DemoMail($mailData));
            
                Mail::to($user)->send(new DemoMail($mailData));
        
                dd('Email Sent Successfully');
    }
}
