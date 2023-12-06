<?php

namespace App\Http\Controllers;

use App\Mail\kirimEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kirimEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        Mail::to("webmaster@etmmetalgroup.co.id")->send(new kirimEmail($request));
        return redirect()->route('contact')->with('success','You have successfully sent a message');
    }
}
