<?php

namespace App\Services;

use App\Models\LikeLog;

class LikeLogService extends BaseService
{
	public function __construct()
	{
	
	}

	public function getAll()
	{
		return LikeLog::all();
	}

	public function getById($id)
	{
		return LikeLog::find($id);
	}

	public function create($data)
	{
		if (!LikeLog::where(['user_id' => $data['user_id'], 'content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
			return LikeLog::create($data);	
		return null;
	}

	public function update($id, $data)
	{
		
	}

	public function delete($id)
	{
		
	}

	public function search()
	{

	}
}
