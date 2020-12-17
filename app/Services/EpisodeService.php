<?php

namespace App\Services;

use App\Models\Episode;


class EpisodeService extends BaseService
{

	protected $showService;

	public function __construct(ShowService $showService)
	{
		$this->showService = $showService;
	}

	public function getAll()
	{
		$episodes = Episode::all();
		foreach ($episodes as $episode) {
			$show = $episode->show_record;
			$episode->show = $show->title;
			$episode->category = $show->category_record->name;
			$episode->quality = $show->quality_record->name;
			$episode->lang = $show->lang_record->name;
			$episode->season = "season ".$episode->season;
		}
        return $episodes;
	}

	public function getById($id)
	{
		return Episode::find($id);
	}
	
	public function getDetail($id)
	{
		$episode = Episode::find($id);
		if (!$episode)
			return null;
		$show = $episode->show_record;
		$episode->show = $show->title;
		return $episode;
	}
	
	public function create($data)
	{
		return Episode::create($data);
	}

	public function update($id, $data)
	{
		$episode = $this->getById($id);
		if (!$episode)
			return false;
		return $episode->update($data);
	}

	public function delete($id)
	{
		$episode = $this->getById($id);
		if (!$episode)
			return false;
		return $episode->delete();
	}

	public function search()
	{

	}

	public function getReferences()
	{
		$shows = $this->showService->getAll();
		$seasons = [
			['id' => 1, 'name' => 'season 1'],
			['id' => 2, 'name' => 'season 2'],
			['id' => 3, 'name' => 'season 3'],
			['id' => 4, 'name' => 'season 4'],
			['id' => 5, 'name' => 'season 5'],
		];
		return ['shows' => $shows, 'seasons' => $seasons];
	}
}
