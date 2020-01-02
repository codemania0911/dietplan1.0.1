<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Http\DietPlanController;
use Illuminate\Support\Facades\URL;

class SendEmailController extends Controller
{
    //

    function send(Request $request) {

        $a = URL::current();
        $data = $request->input('email');
        $data = array(
            'email' =>  $data
        );

        Mail::to($data)->send(new SendMail($data));

        return back()->with('success', 'Sent');
    }
}
