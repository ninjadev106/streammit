<?php

namespace App\Services;

use App\Models\VisitLog;

class VisitLogService extends BaseService
{
	public function __construct()
	{
	
	}

	public function getAll()
	{
		return VisitLog::all();
	}

	public function getById($id)
	{
		return VisitLog::find($id);
	}

	public function create($data)
	{
		return VisitLog::create($data);	
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
