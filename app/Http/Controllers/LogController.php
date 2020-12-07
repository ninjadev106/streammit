<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\LikeLog;

use App\Services\LikeLogService;
use App\Services\DownLogService;
use App\Services\VisitLogService;
use App\Services\ViewLogService;

class LogController extends Controller
{
    //
    protected $likelogService;
    protected $downlogService;
    protected $viewlogService;
    protected $visitlogService;

    public function __construct(LikeLogService $likelogService, DownLogService $downlogService, VisitLogService $visitlogService, ViewLogService $viewlogService)
    {
        // $this->middleware('auth:api');
        $this->likelogService = $likelogService;
        $this->downlogService = $downlogService;
        $this->visitlogService = $visitlogService;
        $this->viewlogService = $viewlogService;
        $this->middleware('auth:api', ['except' => ['visit_store', 'like_all']]);
    }
    public function like_all()
    {
        // $user = auth('api')->user();
        // $logs = LikeLog::where(['user_id' => $user->id])->get();
        $logs = $this->likelogService->getAll();
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
    public function download_store(Request $request)
    {   
        $data = $request->all();
        $this->downlogService->create([
            'content_type' => $data['content_type'],
            'content_id' => $data['content_id'],
            'date' => date('Y-m-d'),
        ]);
        return response()->json(['success' => true]);
    }   

    public function view_store(Request $request)
    {
        $data = $request->all();
        $this->viewlogService->create([
            'content_type' => $data['content_type'],
            'content_id' => $data['content_id'],
            'date' => date('Y-m-d'),
        ]);
        return response()->json(['success' => true]);
    }
    public function visit_store(Request $request)
    {
        $this->visitlogService->create([
            'ip' => $request->ip(),
            'date' => date('Y-m-d')
        ]);
        return response()->json(['success' => true]);
    }
}
