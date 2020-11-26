<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MovieService;
use App\Services\FileUploadService;

class MovieController extends Controller
{
    //
    protected $movieService;
    protected $fileUploadService;
    public function __construct(MovieService $movieService, FileUploadService $fileUploadService)
    {   
        $this->movieService = $movieService;
        $this->fileUploadService = $fileUploadService;
    }
    public function index()
    {   
        $movies = $this->movieService->getAll();
        return view('movie.index')->with('movies', $movies);
    }
    public function create()
    {
        $references = $this->movieService->getReferences();
        return view('movie.create')->with('references', $references);
    }
    public function edit($id)
    {
        $movie = $this->movieService->getById($id);
        $references = $this->movieService->getReferences();
        return view('movie.edit')
                ->with('movie', $movie)
                ->with('references', $references);
    }
    public function show($id)
    {
        $movie = $this->movieService->getDetail($id);
        return view('movie.show')->with('movie', $movie);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'quality' => 'required',
            'lang' => 'required',  
            'releseDate' => 'required',
            'duration' => 'required'
        ]);
        $data = $request->all();

        if (($file = $request->file('file')) && ($video = $request->file('video'))) 
        {
            $data['file'] = $this->fileUploadService->uploadImage($file);
            $data['video_link'] = $this->fileUploadService->uploadVideo($video);
            $movie = $this->movieService->create($data);
            return redirect()->route('admin.movie.index');
        }
        return redirect()->route('admin.movie.create');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'quality' => 'required',
            'lang' => 'required',  
            'releseDate' => 'required',
            'duration' => 'required'
        ]);
        $data = $request->all();
        unset($data['file']);
        unset($data['video']);
        if ($file = $request->file('file'))
            $data['file'] = $this->fileUploadService->uploadImage($file);
        if ($video = $request->file('video'))
            $data['video_link'] = $this->fileUploadService->uploadVideo($video);

        $this->movieService->update($id, $data);
        return redirect()->route('admin.movie.index');
    }
    public function destroy($id)
    {
        $this->movieService->delete($id);
        return redirect()->route('admin.movie.index');
    }
}
