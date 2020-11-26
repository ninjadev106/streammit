<?php

namespace App\Services;

use App\Models\Movie;

class MovieService extends BaseService
{

	protected $langService;
	protected $qualityService;
	protected $categoryService;

	public function __construct(CategoryService $categoryService, LanguageService $langService, QualityService $qualityService)
	{
		$this->langService = $langService;
		$this->qualityService = $qualityService;
		$this->categoryService = $categoryService;
	}

	public function getAll()
	{
		$movies = Movie::all();

		foreach ($movies as $movie) {
			$movie->category = $movie->category_record->name;
			$movie->lang = $movie->lang_record->name;
			$movie->quality = $movie->quality_record->name;
			// $movie->file = "http://localhost:8000/storage/".$movie->file;
		}
		return $movies;
	}

	public function getById($id)
	{
		return Movie::find($id);
	}

	public function getDetail($id)
	{
		$movie = Movie::find($id);
		$movie->category = $movie->category_record->name;
		$movie->lang = $movie->lang_record->name;
		$movie->quality = $movie->quality_record->name;
		return $movie;
	}
	
	public function create($data)
	{
		return Movie::create($data);
	}

	public function update($id, $data)
	{
		$movie = $this->getById($id);
		return $movie->update($data);
	}

	public function delete($id)
	{
		$movie = $this->getById($id);
		return $movie->delete();
	}

	public function search()
	{

	}

	public function getReferences()
	{
		$categories = $this->categoryService->getAll();
		$langs = $this->langService->getAll();
		$qualities = $this->qualityService->getAll();
		return [
			'categories' => $categories,
			'langs' => $langs,
			'qualities' => $qualities
		];
	}
}
