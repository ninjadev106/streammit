<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\UpdatePasswordRequest;

use App\Models\User;

class ChangePasswordController extends Controller
{
    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function passwordResetProcess(UpdatePasswordRequest $request){
        return $this->updatePasswordRow($request)->count() > 0 ? $this->resetPassword($request) : $this->tokenNotFoundError();
      }
  
      // Verify if token is valid
      private function updatePasswordRow($request){
         return DB::table('si_recover_password')->where([
             'email' => $request->email,
             'token' => $request->passwordToken
         ]);
      }
  
      // Token not found response
      private function tokenNotFoundError() {
          return response()->json([
            'error' => 'Either your email or token is wrong.'
          ], Response::HTTP_UNPROCESSABLE_ENTITY);
      }
  
      // Reset password
      private function resetPassword($request) {
          // find email
          $userData = User::whereEmail($request->email)->first();
          // update password
          $userData->update([
            'password' => Hash::make($request->password)
          ]);
          // remove verification data from db
          $this->updatePasswordRow($request)->delete();
  
          // reset password response
          return response()->json([
            'data'=>'Password has been updated.'
          ], Response::HTTP_CREATED);
      }    
}
