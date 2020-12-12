<?php

namespace App\Services;

use App\Models\VideoQuality;
class QualityService extends BaseService
{
	public function __construct()
	{
	
	}

	public function getAll()
	{
		return VideoQuality::all();
	}

	public function getById($id)
	{
		return VideoQuality::find($id);
	}

	public function create($data)
	{
		
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