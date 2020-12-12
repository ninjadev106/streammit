<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Services\MovieService;
use App\Services\ShowService;
use App\Services\EpisodeService;
use App\Services\FContentService;

class FContentController extends Controller
{
    //
    protected $movieService;
    protected $showService;
    protected $episodeService;
    protected $fContentService;
    
    public function __construct(MovieService $movieService, ShowService $showService, EpisodeService $episodeService, FContentService $fContentService)
    {
        $this->movieService = $movieService;
        $this->showService = $showService;
        $this->episodeService = $episodeService;
        $this->fContentService = $fContentService;
    }

    public function index($category)
    {
        $contents = $this->fContentService->getAll($category);
        return view('f-content.index')
                ->with('category', $category)
                ->with('contents', $contents);
    }

    public function content($type)
    {
        $data = [];
        if ($type == 'movie')
            $data = $this->movieService->getAll();
        else if ($type == 'show')
            $data = $this->showService->getAll();
        else if ($type == 'episode')
            $data = $this->episodeService->getAll();
        return response()->json(['data' => $data]);
    }

    public function show($category, $id)
    {
        $data = $this->fContentService->getById($category, $id);
        return view('f-content.show')
                ->with('category', $category)
                ->with('shell', $data);
    }
    public function store(Request $request, $category)
    {
        $request->validate([
            'content_type' => 'required',
            'content_id' => 'required'
        ]);
        $data = $request->all();
        $this->fContentService->create($data, $category);
        return redirect()->route('admin.f-content.index', $category);   
    }

    public function destroy($category, $id)
    {
        $this->fContentService->delete($category, $id);
        return redirect()->route('admin.f-content.index', $category); 
    }

    /*
    |------------------------------------------------------------------
    | Api actions
    |------------------------------------------------------------------
    */
    public function all()
    {
        $cmaps = $this->fContentService->whole();
        return response()->json($cmaps);
    }
}
