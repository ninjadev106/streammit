<?php

namespace App\Services;

use App\Models\VideoCategory;
use App\Models\Movie;
use App\Models\Show;

class CategoryService extends BaseService
{

	public function __construct()
	{
	
	}

	public function getAll()
	{
		$categories = VideoCategory::all();
		$movies = Movie::all();
		$shows = Show::all();

		foreach ($categories as $category) 
		{
			$category->movie = (count($category->movies) + count($category->shows));
			// $category->percent = bcdiv($category->movie * 100, count($movies) + count($shows));
			$category->percent = floatval(number_format(($category->movie * 100) / (count($movies) + count($shows) + 1), 2));
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
