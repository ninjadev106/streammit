<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\ContactUs;
use Mail;

class ContactUSController extends Controller
{
    //
    public function contact_us_post(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $data = $request->all();
        // ContactUS::create($request->all());

        \Mail::send('email.template', array(
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
        ), function($message) use ($request){
            $message->from('web.anon2019@gmail.com');
            $message->to('brhor106@gmail.com', 'Admin')->subject("aaa");
        });
        return response()->json(['success' => true]);
    }
}
