<?php

namespace App\Services;

use App\Models\VideoCategory;
class CategoryService extends BaseService
{
	public function __construct()
	{
	
	}

	public function getAll()
	{
		$categories = VideoCategory::all();
		foreach ($categories as $category) 
		{
			$category->movie = (count($category->movies) + count($category->shows));
		}
		return $categories;
	}

	public function getById($id)
	{
		return VideoCategory::find($id);
	}

	public function getDetail($id)
	{
		return VideoCategory::find($id);
	}

	public function create($data)
	{
		return VideoCategory::create([
			'name' => $data['name'],
			'description' => $data['description'],
			'status' => $data['status']
		]);
	}

	public function update($id, $data)
	{
		$category = $this->getById($id);
		return $category->update($data);
	}

	public function delete($id)
	{
		$category = $this->getById($id);
		return $category->delete();
	}

	public function search()
	{

	}
}
