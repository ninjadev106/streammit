<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Mail\SendMail;

use Mail;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function sendPasswordResetEmail(Request $request){
        // If email does not exist
        if(!$this->validEmail($request->email)) {
            return response()->json([
                'message' => 'Email does not exist.'
            ], Response::HTTP_NOT_FOUND);
        } else {
            // If email exists
            $this->sendMail($request->email);
            return response()->json([
                'message' => 'Check your inbox, we have sent a link to reset email.'
            ], Response::HTTP_OK);            
        }
    }
    public function sendMail($email){
        $token = $this->generateToken($email);
        Mail::to($email)->send(new SendMail($token));
    }

    public function validEmail($email) {
       return !!User::where('email', $email)->first();
    }

    public function generateToken($email){
      $isOtherToken = DB::table('si_recover_password')->where('email', $email)->first();

      if($isOtherToken) {
        return $isOtherToken->token;
      }

      $token = Str::random(80);;
      $this->storeToken($token, $email);
      return $token;
    }

    public function storeToken($token, $email){
        DB::table('si_recover_password')->insert([
            'email' => $email,
            'token' => $token,
            'created' => date('Y-m-d H:i:s')    
        ]);
    }
}
