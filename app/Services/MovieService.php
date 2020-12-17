<?php

namespace App\Services;

use App\Models\Movie;

class MovieService extends BaseService
{

	protected $langService;
	protected $qualityService;
	protected $categoryService;
	protected $notifyService;
	public function __construct(CategoryService $categoryService, LanguageService $langService, QualityService $qualityService, NotifyService $notifyService)
	{
		$this->langService = $langService;
		$this->qualityService = $qualityService;
		$this->categoryService = $categoryService;
		$this->notifyService = $notifyService;
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
		$movie = $this->getById($id);
		if (!$movie)
			return null;
		$movie->category = $movie->category_record->name;
		$movie->lang = $movie->lang_record->name;
		$movie->quality = $movie->quality_record->name;
		return $movie;
	}
	
	public function create($data)
	{
		$movie = Movie::create($data);
		$notify = array(
			'icon' => $movie->file,
			'title' => $movie->title,
			'body' => 'New Movie',
			'link' => 'landing-page.movie-category'
		);
		$this->notifyService->sendNotify($notify);
	}

	public function update($id, $data)
	{
		$movie = $this->getById($id);
		if (!$movie)
			return false;
		return $movie->update($data);
	}

	public function delete($id)
	{
		$movie = $this->getById($id);
		if (!$movie)
			return false;
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
