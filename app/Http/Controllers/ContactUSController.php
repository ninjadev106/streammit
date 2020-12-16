<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

use App\Models\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    //
    public function contact_us_post(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $data = $request->all();
        DB::beginTransaction();

        try {

            \Mail::send('email.contact-us', array(
                'name' => $data['name'],
                'subject' => $data['subject'],
                'email' => $data['email'],
                'body' => $data['message'],
            ), function($message) use ($data){
                $message->from($data['email']);
                $message->to('info@onyxstreaming.com', 'Admin')->subject($data['subject']);
            });

            ContactUS::create($request->all());
            DB::commit();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
