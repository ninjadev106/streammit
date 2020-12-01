<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Services\CategoryService;

class CategoryController extends Controller
{
    //
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {   
        $categories = $this->categoryService->getAll();
        return view('category.index')->with('categories', $categories);
    }
    public function create()
    {
        return view('category.create');
    }
    public function edit($id)
    {
        $category = $this->categoryService->getById($id);
        return view('category.edit')->with('category', $category);
    }
    public function show($id)
    {
        $category = $this->categoryService->getDetail($id);
        return view('category.show')->with('category', $category);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        $category = $this->categoryService->create($request->all());    
        return redirect()->route('admin.category.index');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
        $this->categoryService->update($id, $request->all());
        return redirect()->route('admin.category.index');
    }
    public function destroy($id)
    {
        $this->categoryService->delete($id);
        return redirect()->route('admin.category.index');
    }

    /*
    |------------------------------------------------------------------
    | Api actions
    |------------------------------------------------------------------
    */
    public function all()
    {
        $categories = $this->categoryService->getAll();
        return response()->json($categories);
    }
}
