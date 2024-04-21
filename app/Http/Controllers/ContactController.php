<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use Exception;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs(){
        return view('contactUs');
    }

    public function submit(Request $request) {
        
        $name = $request->name;
        $email = $request->email;
        $body = $request->body;

        $userData = compact('name', 'email', 'body');

        try {
            Mail::to($email)->send(new ContactMail());      
            Mail::to('admin@aulab.it')->send(new AdminMail($userData));  

        } catch (Exception $error) {
            return redirect()->back()->with('errorEmail', 'c\'é stato un problema con la mail, riprovare più tardi');
        }

        return redirect(route('homepage'))->with('message','Ti abbiamo mandato una mail, controlla la tua casella di posta elettronica');
    }
}
