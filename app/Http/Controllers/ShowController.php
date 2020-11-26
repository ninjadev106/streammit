<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShowService;
use App\Services\FileUploadService;

class ShowController extends Controller
{
    //
    protected $showService;
    protected $fileUploadService;
    public function __construct(ShowService $showService, FileUploadService $fileUploadService)
    {
        $this->showService = $showService;
        $this->fileUploadService = $fileUploadService;
    }
    public function index()
    {   
        $shows = $this->showService->getAll();
        return view('show.index')->with('shows', $shows);
    }
    public function create()
    {
        $references = $this->showService->getReferences();
        return view('show.create')->with('references', $references);
    }
    public function edit($id)
    {
        $show = $this->showService->getById($id);
        $references = $this->showService->getReferences();
        return view('show.edit')
                ->with('show', $show)
                ->with('references', $references);
    }
    public function show($id)
    {
        $show = $this->showService->getDetail($id);
        return view('show.show')->with('show', $show);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'quality' => 'required',
            'lang' => 'required',  
        ]);
        $data = $request->all();
    
        if (($file = $request->file('file')) && ($banner = $request->file('banner'))) 
        {
            $data['file'] = $this->fileUploadService->uploadImage($file, 'f');
            $data['banner'] = $this->fileUploadService->uploadImage($banner, 'b');
            $movie = $this->showService->create($data);
            return redirect()->route('admin.show.index');
        }
        return redirect()->route('admin.show.create');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'quality' => 'required',
            'lang' => 'required',  
        ]);
        $data = $request->all();
        unset($data['file']);
        unset($data['banner']);
        if ($file = $request->file('file'))
            $data['file'] = $this->fileUploadService->uploadImage($file);
        if ($banner = $request->file('banner'))
            $data['banner'] = $this->fileUploadService->uploadImage($banner);
        $this->showService->update($id, $data);
        return redirect()->route('admin.show.index');
    }
    public function destroy($id)
    {
        $this->showService->delete($id);
        return redirect()->route('admin.show.index');
    }
}
