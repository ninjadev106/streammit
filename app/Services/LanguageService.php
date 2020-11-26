<?php

namespace App\Services;

use App\Models\VideoLanguage;
class LanguageService extends BaseService
{
	public function __construct()
	{
	
	}

	public function getAll()
	{
		return VideoLanguage::all();
	}

	public function getById($id)
	{
		return VideoLanguage::find($id);
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
