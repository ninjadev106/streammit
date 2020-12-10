<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Services\NotifyService;

class NotifyController extends Controller
{
    //
    protected $notifyService;
    public function __construct(NotifyService $notifyService)
    {
        $this->notifyService = $notifyService;
        $this->middleware('auth:api');
    }

    public function get()
    {
        $notifies = $this->notifyService->getAll(auth('api')->user()->id);
        return response()->json($notifies);
    }
    
    public function destroy($id)
    {
        $this->notifyService->delete($id);
        return response()->json('successfully deleted'); 
    }

    public function confirm(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = auth('api')->user()->id;
        $this->notifyService->findAndConfirm($data);
        return response()->json('successfully confirmed');
    }
}
