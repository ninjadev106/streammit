<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

use App\Models\DownloadLog;
use App\Models\ViewLog;
use App\Models\Movie;
use App\Models\Show;

class DownLogService extends BaseService
{
	public function __construct()
	{
	
	}

	public function getAll()
	{
		return DownloadLog::all();
	}

	public function getById($id)
	{
		return DownloadLog::find($id);
	}

	public function create($data)
	{
		return DownloadLog::create($data);	
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

	public function topItems()
	{
		$query = "SELECT content_type, content_id, COUNT(id) as down_count FROM `si_download_log` WHERE content_type = 'movie' GROUP BY CONCAT(content_type, content_id) ORDER BY down_count ASC LIMIT 5";
		$movieMapList = DB::select(DB::raw($query));
		$query = "SELECT content_type, content_id, COUNT(id) as down_count FROM `si_download_log` WHERE content_type = 'show' GROUP BY CONCAT(content_type, content_id) ORDER BY down_count ASC LIMIT 5";
		$showMapList = DB::select(DB::raw($query));
		$topItems = [];
		foreach ($movieMapList as $item) {
			$cId = $item->content_id;
			$cType = $item->content_type;

			$movie = DB::table('si_movies')->find($cId);
			$views = DB::table('si_view_log')->where(['content_type' => $cType, 'content_id' => $cId])->get();
			if ($movie) {
				$movie->viewCount = count($views);
				$movie->downCount = $item->down_count;
				$movie->type = "Movie";
				array_push($topItems, $movie);
			}
		}
		foreach ($showMapList as $item) {
			$cId = $item->content_id;
			$cType = $item->content_type;

			$show = DB::table('si_shows')->find($cId);
			$views = DB::table('si_view_log')->where(['content_type' => $cType, 'content_id' => $cId])->get();
			if ($show) {
				$show->viewCount = count($views);
				$show->downCount = $item->down_count;
				$show->type = "T.v Show";	
				array_push($topItems, $show);
			}
		}

		return $topItems;
	}
}
