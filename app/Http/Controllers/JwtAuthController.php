<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

use App\Services\UserService;
use App\Services\FileUploadService;
use App\Services\LoginLogService;

use App\Models\Membership;
use App\Rules\MatchOldPassword;

class JwtAuthController extends Controller
{
    //
    protected $userService;
    protected $fileUploadService;
    protected $loginLogService;

    public $token = true;

    public function __construct(UserService $userService, FileUploadService $fileUploadService, LoginLogService $loginLogService)
    {
        $this->userService = $userService;
        $this->fileUploadService = $fileUploadService;
        $this->loginLogService = $loginLogService;

        $this->middleware('auth:api', ['except' => ['login', 'register', 'expired']]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:si_users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails())
            return response()->json(['error' => $validator->errors()], 401);
        $user = $this->userService->create($request->all());
        
        return response()->json([
            'success' => true,
            'data' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        // auth('api')->factory()->setTTL(5);
        if (! $token = auth('api')->attempt($validator->validated())) {
            return response()->json(['success' => false, 'message' => 'You are an unauthorized user']);
        }
        
        $user = auth('api')->user();
        
        $memship = $user->memships[0];
        $loginCount = $this->loginLogService->getLoginCount($user);
        if ($loginCount >= $memship->multiLoginCount) {
            $devPhrase = $loginCount > 1 ? 'devices' : 'device'; 
            return response()->json([
                'success' => false,
                'message' => 'Already logged into '.$loginCount.' '.$devPhrase.'. Please upgrade your pricing plan, if you want to log in on more than '.$loginCount.' '.$devPhrase.'.'
            ]);
        }
        
        $this->loginLogService->create([
            'user_id' => $user->id,
            'token' => $token,
            'date' => date('Y-m-d')
        ]);
        return $this->createNewToken($token);
    }
    public function logout(Request $request)
    {
        $auth_header = $request->header('Authorization');
        $token = explode('bearer ', $auth_header)[1];
        $this->loginLogService->delete($token);

        auth('api')->logout();
        return response()->json(['message' => 'User successfully signed out', 'token' => $request->header('Authorization')]);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(Request $request) {
        $auth_header = $request->header('Authorization');
        $prev_token = explode('bearer ', $auth_header)[1];
        $new_token = auth('api')->refresh();
        $this->loginLogService->update($prev_token, $new_token);
        return $this->createNewToken($new_token);
    }
    public function expired(Request $request) {
        $auth_header = $request->header('Authorization');
        $token = explode('bearer ', $auth_header)[1];
        $this->loginLogService->delete($token);
        return response()->json(['message' => 'token expired.']);
    }
     /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function userProfile() {
        return response()->json(auth('api')->user()->profile);
    }


    public function userProfileUpdate(Request $request)
    {
        $request->validate([
            'userId' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'lang' => 'required',
            'birthDate' => 'required'
        ]);
        $data = $request->all();
        if ($file = $request->file('file'))
            $data['image'] = $this->fileUploadService->uploadImage($file);
        
        $this->userService->updateProfile($data['userId'], $data);
        return response()->json(auth('api')->user()->profile);
    }

    public function changePassword(Request $request) 
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required',
            'new_confirm_password' => 'same:new_password'
        ]);
        $data = $request->all();
        auth('api')->user()->update(['password' => Hash::make($data['new_password'])]);
        return response()->json(['success' => true]);
    }

    public function changeEmail(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]); 
        $data = $request->all();
        auth('api')->user()->update(['email' => $data['email']]);
        return response()->json($data['email']);
    }

    public function upgradeMembership(Request $request)
    {
        $memshipId = $request->memship_id;
        $user = auth('api')->user();
        foreach ($user->memships as $memship) {
            $memship->pivot->updated_at = date('Y-m-d');
            $memship->pivot->memship_id = $memshipId;
            $memship->pivot->save();
        }
        $memship = Membership::find($memshipId);
        return response()->json($memship);
    }
    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function createNewToken($token){
        $user = auth('api')->user();
        $user->profile = $user->profile;
        $user->memship = $user->memships[0];
        return response()->json([
            'success' => true,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 5,
            'user' => $user
        ]);
    }

    public function saveDeviceToken(Request $request) 
    {
        auth('api')->user()->update(['device_token' => $request->token]);
        return response()->json('token saved successfully');
    }
}
