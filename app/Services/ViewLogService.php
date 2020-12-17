<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

use App\Services\MovieService;
use App\Services\ShowService;
use App\Models\ViewLog;
use App\Models\Movie;
use App\Models\Show;
use App\Models\DownloadLog;

class ViewLogService extends BaseService
{
	protected $movieService;
	protected $showService;
	public function __construct(MovieService $movieService, ShowService $showService)
	{
		$this->movieService = $movieService;
		$this->showService = $showService;
	}

	public function getAll()
	{
		return ViewLog::all();
	}

	public function getById($id)
	{
		return ViewLog::find($id);
	}
	public function recent()
	{
		$query = "SELECT `content_type`, `content_id`, `date`, COUNT(id) as view_count FROM (SELECT * FROM si_view_log A WHERE 1 ORDER BY A.date DESC) as B GROUP BY CONCAT(B.content_type, B.content_id) LIMIT 10";
		$mapList = DB::select(DB::raw($query));
		$data = [];
		foreach ($mapList as $item) {
			$cId = $item->content_id;
			$cType = $item->content_type;
			if ($cType == 'movie')
				$content = $this->movieService->getDetail($cId);
			else if ($cType == 'show')
				$content = $this->showService->getDetail($cId);
			else
				continue;
			
			if ($content) {
				$content->date = $item->date;
				$content->viewCount = $item->view_count;
				$content->downCount = count(DownloadLog::where(['content_type' => $cType, 'content_id' => $cId])->get());
				array_push($data, $content);
			}
		}
		return $data;
	}
	public function create($data)
	{
		return ViewLog::create($data);	
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
