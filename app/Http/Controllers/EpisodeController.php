<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EpisodeService;
use App\Services\FContentService;
use App\Services\FileUploadService;

class EpisodeController extends Controller
{
    //
    protected $episodeService;
    protected $fileUploadService;
    protected $fContentService;

    public function __construct(EpisodeService $episodeService, FileUploadService $fileUploadService, FContentService $fContentService)
    {   
        $this->episodeService = $episodeService;
        $this->fileUploadService = $fileUploadService;
        $this->fContentService = $fContentService;
    }
    public function index()
    {   
        $episodes = $this->episodeService->getAll();
        return view('episode.index')->with('episodes', $episodes);
    }
    public function create()
    {
        $references = $this->episodeService->getReferences();
        return view('episode.create')->with('references', $references);
    }
    public function edit($id)
    {
        $episode = $this->episodeService->getById($id);
        $references = $this->episodeService->getReferences();
        return view('episode.edit')
                ->with('episode', $episode)
                ->with('references', $references);
    }
    public function show($id)
    {
        $episode = $this->episodeService->getDetail($id);
        return view('episode.show')->with('episode', $episode);
    }
    public function store(Request $request)
    {
        $request->validate([
            'show' => 'required',
            'season' => 'required',
            'episode' => 'required',
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'duration' => 'required'
        ]);
        $data = $request->all();
        if (($file = $request->file('file')) && ($video = $request->file('video'))) 
        {
            $data['file'] = $this->fileUploadService->uploadImage($file);
            $data['video_link'] = $this->fileUploadService->uploadVideo($video);
            $episode = $this->episodeService->create($data);
            return response()->json('success');
            // return redirect()->route('admin.episode.index');
        }
        return response()->json('failed');
        // return redirect()->route('admin.episode.create');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'show' => 'required',
            'season' => 'required',
            'episode' => 'required',
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'duration' => 'required'
        ]);
        $data = $request->all();
        unset($data['file']);
        unset($data['video']);
        if ($file = $request->file('file'))
            $data['file'] = $this->fileUploadService->uploadImage($file);
        if ($video = $request->file('video'))
            $data['video_link'] = $this->fileUploadService->uploadVideo($video);

        $this->episodeService->update($id, $data);
        return response()->json('success');
        // return redirect()->route('admin.episode.index');
    }
    public function destroy($id)
    {
        $this->fContentService->deleteAll('episode', $id);
        $this->episodeService->delete($id);
        return redirect()->route('admin.episode.index');
    }


     /*
    |------------------------------------------------------------------
    | Api actions
    |------------------------------------------------------------------
    */
}
