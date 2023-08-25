<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Mail\MyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function sendEmail(EmailRequest $request){
        $data = [
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'phone'=> $request->input('phone'),
            'text'=> $request->input('text'),
        ];


        Mail::to(['golbon.taha@gmail.com','wongswings7@gmail.com'])->send(new MyMail($data));

        return redirect()->back()->with('success', 'ایمیل با موفقیت ارسال شد.');

        
    }
}
