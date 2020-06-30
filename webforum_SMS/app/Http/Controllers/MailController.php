<?php

namespace App\Http\Controllers;

use App\Mail\SignUpEmail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public static function sendSignUpEmail($name, $email, $verification_code){
       $data= [
           'name' => $name,
           'verification_code' => $verification_code
       ];
        Mail::to($email)->send(new SignUpEmail($data));
    }
}
