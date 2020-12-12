<?php

namespace App\Services;

use App\Models\LoginLog;
use App\Models\User;
use App\Models\Notify;

class NotifyService extends BaseService
{

    protected $userService;
	public function __construct(UserService $userService)
	{
        $this->userService = $userService;
	}
    
    public function getAll($uId = null)
    {
        if ($uId == null)
            return Notify::all();
        else
            return Notify::where(['user_id' => $uId])->get();
    }

    public function getById($id)
    {
        return Notify::find($id);
    }

    public function create($data)
    {
        return Notify::create($data);
    }
    public function sendNotify($notify, $id = null)
    {
        $users = $this->userService->getActiveUsers($id);
        $now = date('Y-m-d H:i:s');
        foreach ($users as $user)
        {
            $this->create([
                'title' => $notify['title'],
                'body' => $notify['body'],
                'icon' => $notify['icon'],
                'link' => $notify['link'],
                'user_id' => $user->id,
                'pushed_at' => $now,
            ]);
        }

        if ($id)
            $firebaseToken = User::where(['id' => $id])->pluck('device_token')->all();
        else
            $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();
        
        $SERVER_API_KEY = 'AAAASV1qcQc:APA91bHyEb19xrZ6MTiKIsQpSC0sShV2HLh_xQ4w6XJ9ODvle6_vyOiua2-CVDfp9Dgy5hXsjajshyFGi1X2BGi8iIxBuLHDaNfhvTIacl8ANS7cDCexUJoOpxNaC_P5Dimu___moe3L';
        
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $notify['title'],
                "body" => $notify['body'],  
                "icon" => $notify['icon'],
            ],
            "data" => [
                "link" => $notify['link'],
                "pushed_at" => $now
            ]
        ];
        $dataString = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);

        
    }

    public function delete($id)
    {
        $notify = $this->getById($id);
        $notify->delete();
    }

    public function findAndConfirm($data)
    {
        $notify = Notify::where([
            'title' => $data['title'],
            'body' => $data['body'],
            'icon' => $data['icon'],
            'link' => $data['link'],
            'user_id' => $data['user_id'],
            'pushed_at' => $data['pushed_at']
        ])->first();

        if ($notify)
            $notify->delete();
    }
}
