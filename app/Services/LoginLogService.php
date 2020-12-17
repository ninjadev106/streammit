<?php

namespace App\Services;

use App\Models\LoginLog;

class LoginLogService extends BaseService
{
	public function __construct()
	{
	
	}

	public function getAll()
	{
		return LoginLog::all();
	}

	public function getById($id)
	{
		return LoginLog::find($id);
	}

    public function getByUId($uId)
    {
        return LoginLog::where(['user_id' => $uId])->first();
    }
    public function getByToken($token)
    {
        return LoginLog::where(['token' => $token])->first();
    }

    public function getLoginCount($user)
    {
        return count(LoginLog::where(['user_id' => $user->id])->get());
    }
	public function create($data)
	{
		return LoginLog::create($data);
	}

	public function update($prev, $new)
	{
		$log = $this->getByToken($prev);
		return $log->update(['token' => $new]);
	}

	public function delete($token)
	{
        $log = $this->getByToken($token);
        return $log->delete();
	}

	public function search()
	{

	}
}
