<?php

namespace App\Services;

use App\Models\Show;

class ShowService extends BaseService
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
		$shows = Show::all();

		foreach ($shows as $show) {
			$show->category = $show->category_record->name;
			$show->lang = $show->lang_record->name;
			$show->quality = $show->quality_record->name;
			$show->seasons = count($show->episodes()->groupBy('season')->get()->toArray());
			$show->episodes = $show->episodes;
		}
		return $shows;
	}

	public function getById($id)
	{
		return Show::find($id);
	}

	public function getDetail($id)
	{
		$show = $this->getById($id);
		if (!$show)
			return false;
		$show->category = $show->category_record->name;
		$show->lang = $show->lang_record->name;
		$show->quality = $show->quality_record->name;
		$show->seasons = count($show->episodes()->groupBy('season')->get()->toArray());
		return $show;
	}
	
	public function create($data)
	{
		$show = Show::create($data);
		$notify = array(
			'icon' => $show->file,
			'title' => $show->title,
			'body' => 'New Show',
			'link' => 'landing-page.show-category'
		);
		$this->notifyService->sendNotify($notify);
	}

	public function update($id, $data)
	{
		$show = $this->getById($id);
		if (!$show)
			return false;
		return $show->update($data);
	}

	public function delete($id)
	{
		$show = $this->getById($id);
		if (!$show)
			return false;
		return $show->delete();
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
