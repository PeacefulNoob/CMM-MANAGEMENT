<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail\SendInquiry;
class EmailController extends Controller
{
    public function exc(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'message' => 'required|string',
            'email' => 'required|email',
            'title' => 'required|string|max:555',
         

        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
           Mail::to('cmmizdavanje@gmail.com')->send(new SendInquiry($request));
           return redirect()->back()->with('contact', 'Message Sent! Our representative will contact you back through e-mail with the confirmation as soon as possible. ');
    }

}
