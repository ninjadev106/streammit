<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\LikeLog;

use App\Services\LikeLogService;

class LogController extends Controller
{
    //
    protected $likelogService;

    public function __construct(LikeLogService $likelogService)
    {
        // $this->middleware('auth:api');
        $this->likelogService = $likelogService;
    }
    public function like_all()
    {
        // $user = auth('api')->user();
        // $logs = LikeLog::where(['user_id' => $user->id])->get();
        $logs = LikeLog::all();
        return response()->json($logs);
    }
    public function like_store(Request $request)
    {
        $data = $request->all();
        $like = $this->likelogService->create([
            'user_id' => $data['user'],
            'content_type' => $data['type'],
            'content_id' => $data['id'],
            'date' => date('Y-m-d')
        ]);
        if (!$like)
            return response()->json(['success' => false]);
        return response()->json(['success' => true, 'data' => $like]);
    }
    public function download()
    {   

    }   
    public function login()
    {

    }
}
