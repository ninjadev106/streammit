<?php

namespace App\Services;

use App\Models\FavoriteContent;
use App\Models\UpcomingContent;
use App\Models\ToptenContent;
use App\Models\MainCarouselContent;
use App\Models\MovieCarouselContent;
use App\Models\ShowCarouselContent;
use App\Models\TrendingContent;
use App\Models\OnyxOriginContent;
use App\Models\SuggestContent;
use App\Models\WatchAgainContent;
use App\Models\NewReleaseContent;
use App\Models\RecentAddContent;
use App\Models\MovieSection1Content;
use App\Models\MovieSection2Content;
use App\Models\MovieSection3Content;
use App\Models\ShowSection1Content;
use App\Models\ShowSection2Content;
use App\Models\ShowSection3Content;


class FContentService extends BaseService
{
    protected $movieService;
    protected $showService;
    protected $episodeService;

	public function __construct(MovieService $movieService, ShowService $showService, EpisodeService $episodeService)
	{
        $this->movieService = $movieService;
        $this->showService = $showService;
        $this->episodeService = $episodeService;
    }
    public function whole()
    {
        $favorite_m2 = FavoriteContent::all();
        $upcoming_m2 = UpcomingContent::all();
        $topten_m2 = ToptenContent::all();
        $suggest_m2 = SuggestContent::all();
        $trending_m2 = TrendingContent::all();
        $new_m2 = NewReleaseContent::all();
        $recent_m2 = RecentAddContent::all();
        $watch_d_m2 = WatchAgainContent::all();
        $onyx_o_m2 = OnyxOriginContent::all();
        $main_cl_m2 = MainCarouselContent::all();
        $movie_cl_m2 = MovieCarouselContent::all();
        $show_cl_m2 = ShowCarouselContent::all();
        $movie_s1_m2 = MovieSection1Content::all();
        $movie_s2_m2 = MovieSection2Content::all();
        $movie_s3_m2 = MovieSection3Content::all();
        $show_s1_m2 = ShowSection1Content::all();
        $show_s2_m2 = ShowSection2Content::all();
        $show_s3_m2 = ShowSection3Content::all();
        return [
            'favorite' => $favorite_m2,
            'upcoming' => $upcoming_m2,
            'topten' => $topten_m2,
            'suggest' => $suggest_m2,
            'new-release' => $new_m2,
            'trending' => $trending_m2,
            'recent-add' => $recent_m2,
            'watch-again' => $watch_d_m2,
            'onyx-origin' => $onyx_o_m2,
            'main-carousel' => $main_cl_m2,
            'movie-carousel' => $movie_cl_m2,
            'show-carousel' => $show_cl_m2,
            'movie-section1' => $movie_s1_m2,
            'movie-section2' => $movie_s2_m2,
            'movie-section3' => $movie_s3_m2,
            'show-section1' => $show_s1_m2,
            'show-section2' => $show_s2_m2,
            'show-section3' => $show_s3_m2,
        ];
    }
    public function getAll($category)
    {
        switch ($category) 
        {   
            case 'favorite':
                $data = FavoriteContent::all();
                break;
            case 'upcoming':
                $data = UpcomingContent::all();
                break;
            case 'topten':
                $data = ToptenContent::all();
                break;
            case 'suggest':
                $data = SuggestContent::all();
                break;
            case 'new-release':
                $data = NewReleaseContent::all();
                break;
            case 'trending':
                $data = TrendingContent::all();
                break;
            case 'recent-add':
                $data = RecentAddContent::all();
                break;
            case 'watch-again':
                $data = WatchAgainContent::all();
                break;
            case 'onyx-origin':
                $data = OnyxOriginContent::all();
                break;
            case 'main-carousel':
                $data = MainCarouselContent::all();
                break; 
            case 'movie-carousel':
                $data = MovieCarouselContent::all();
                break;  
            case 'show-carousel':
                $data = ShowCarouselContent::all();
                break; 
            case 'movie-section1':
                $data = MovieSection1Content::all();
                break;
            case 'movie-section2':
                $data = MovieSection2Content::all();
                break;
            case 'movie-section3':
                $data = MovieSection3Content::all();
                break;
            case 'show-section1':
                $data = ShowSection1Content::all();
                break;
            case 'show-section2':
                $data = ShowSection2Content::all();
                break;
            case 'show-section3':
                $data = ShowSection3Content::all();
                break;
            default:
                $data = [];
                break;
        }

        foreach ($data as $item)
        {
            $c_type = $item->content_type;
            $c_id = $item->content_id;
            $item->type = $c_type;
            if ($c_type == 'movie')
                $item->title = $this->movieService->getById($c_id)->title;
            else if ($c_type == 'show')
                $item->title = $this->showService->getById($c_id)->title;
            else if ($c_type == 'episode')
                $item->title = $this->episodeService->getById($c_id)->name;
        }
        return $data;
    }

    public function getById($category, $id)
    {
        switch ($category) 
        {   
            case 'favorite':
                $data = FavoriteContent::find($id);
                break;
            case 'upcoming':
                $data = UpcomingContent::find($id);
                break;
            case 'topten':
                $data = ToptenContent::find($id);
                break;
            case 'suggest':
                $data = SuggestContent::find($id);
                break;
            case 'new-release':
                $data = NewReleaseContent::find($id);
                break;
            case 'trending':
                $data = TrendingContent::find($id);
                break;
            case 'recent-add':
                $data = RecentAddContent::find($id);
                break;
            case 'watch-again':
                $data = WatchAgainContent::find($id);
                break;
            case 'onyx-origin':
                $data = OnyxOriginContent::find($id);
                break;
            case 'main-carousel':
                $data = MainCarouselContent::find($id);
                break; 
            case 'movie-carousel':
                $data = MovieCarouselContent::find($id);
                break;  
            case 'show-carousel':
                $data = ShowCarouselContent::find($id);
                break; 
            case 'movie-section1':
                $data = MovieSection1Content::find($id);
                break;
            case 'movie-section2':
                $data = MovieSection2Content::find($id);
                break;
            case 'movie-section3':
                $data = MovieSection3Content::find($id);
                break;
            case 'show-section1':
                $data = ShowSection1Content::find($id);
                break;
            case 'show-section2':
                $data = ShowSection2Content::find($id);
                break;
            case 'show-section3':
                $data = ShowSection3Content::find($id);
                break;
            default:
                $data = null;
                break;
        }
        if (!$data)
            return null;
        $c_type = $data->content_type;
        $c_id = $data->content_id;
        if ($c_type == 'movie')
            $data->content = $this->movieService->getById($c_id);
        else if ($c_type == 'show') 
            $data->content = $this->showService->getById($c_id);
        else if ($c_type == 'episode')
            $data->content =  $this->episodeService->getById($c_id);
        return $data;
    }

    public function create($data, $category)
    {
        $record = null;
        switch ($category) 
        {   
            case 'favorite':
                if (!FavoriteContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = FavoriteContent::create($data);
                break;
            case 'upcoming':
                if (!UpcomingContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = UpcomingContent::create($data);
                break;
            case 'topten':
                if (!ToptenContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = ToptenContent::create($data);
                break;
            case 'suggest':
                if (!SuggestContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = SuggestContent::create($data);
                break;
            case 'new-release':
                if (!NewReleaseContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = NewReleaseContent::create($data);
                break;
            case 'trending':
                if (!TrendingContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = TrendingContent::create($data);
                break;
            case 'recent-add':
                if (!RecentAddContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = RecentAddContent::create($data);
                break;
            case 'watch-again':
                if (!WatchAgainContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = WatchAgainContent::create($data);
                break;
            case 'onyx-origin':
                if (!OnyxOriginContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = OnyxOriginContent::create($data);
                break;
            case 'main-carousel':
                if (!MainCarouselContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = MainCarouselContent::create($data);
                break;  
            case 'movie-carousel':
                if (!MovieCarouselContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = MovieCarouselContent::create($data);
                break; 
            case 'show-carousel':
                if (!ShowCarouselContent::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = ShowCarouselContent::create($data);
                break;
            case 'movie-section1':
                if (!MovieSection1Content::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = MovieSection1Content::create($data);
                break;
            case 'movie-section2':
                if (!MovieSection2Content::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = MovieSection2Content::create($data);
                break;
            case 'movie-section3':
                if (!MovieSection3Content::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = MovieSection3Content::create($data);
                break;
            case 'show-section1':
                if (!ShowSection1Content::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = ShowSection1Content::create($data);
                break;
            case 'show-section2':
                if (!ShowSection2Content::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = ShowSection2Content::create($data);
                break;
            case 'show-section3':
                if (!ShowSection3Content::where(['content_type' => $data['content_type'], 'content_id' => $data['content_id']])->first())
                    $record = ShowSection3Content::create($data);
                break;
            default:
                $record = null;
                break;
        }
        return $record;
    }

    public function delete($category, $id)
    {
        switch ($category) 
        {   
            case 'favorite':
                $success = FavoriteContent::destroy($id);
                break;
            case 'upcoming':
                $success = UpcomingContent::destroy($id);
                break;
            case 'topten':
                $success = ToptenContent::destroy($id);
                break;
            case 'suggest':
                $success = SuggestContent::destroy($id);
                break;
            case 'new-release':
                $success = NewReleaseContent::destroy($id);
                break;
            case 'trending':
                $success = TrendingContent::destroy($id);
                break;
            case 'recent-add':
                $success = RecentAddContent::destroy($id);
                break;
            case 'watch-again':
                $success = WatchAgainContent::destroy($id);
                break;
            case 'onyx-origin':
                $success = OnyxOriginContent::destroy($id);
                break;
            case 'main-carousel':
                $success = MainCarouselContent::destroy($id);
                break;  
            case 'movie-carousel':
                $success = MovieCarouselContent::destroy($id);
                break;  
            case 'show-carousel':
                $success = ShowCarouselContent::destroy($id);
                break;  
            case 'movie-section1':
                $success = MovieSection1Content::destroy($id);
                break;
            case 'movie-section2':
                $success = MovieSection2Content::destroy($id);
                break;
            case 'movie-section3':
                $success = MovieSection3Content::destroy($id);
                break;
            case 'show-section1':
                $success = ShowSection1Content::destroy($id);
                break;
            case 'show-section2':
                $success = ShowSection2Content::destroy($id);
                break;
            case 'show-section3':
                $success = ShowSection3Content::destroy($id);
                break;
            default:
                $success = null;
                break;
        }
        return $success;
    }

    public function deleteAll($content_type, $content_id)
    {
        $data = FavoriteContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = UpcomingContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = ToptenContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = SuggestContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();   
        $data = NewReleaseContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = TrendingContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = RecentAddContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = WatchAgainContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = OnyxOriginContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = MainCarouselContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = MovieCarouselContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = ShowCarouselContent::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = MovieSection1Content::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = MovieSection2Content::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = MovieSection3Content::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = ShowSection1Content::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = ShowSection2Content::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();
        $data = ShowSection3Content::where(['content_type' => $content_type, 'content_id' => $content_id])->first();
        if ($data)
            $data->delete();

        return true;
    }
}
