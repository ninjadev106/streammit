<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CommentService;

class CommentController extends Controller
{
    //
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
    public function index()
    {
        $comments = $this->commentService->getAll();
        return view('comment.index')->with('comments', $comments);
    }
    public function show($id)
    {
        $comment = $this->commentService->getDetail($id);
        return view('comment.show')->with('comment', $comment);
    }
    public function destroy($id)
    {
        $this->commentService->delete($id);
        return redirect()->route('admin.comment.index');
    }

    /*
    |------------------------------------------------------------------
    | Api actions
    |------------------------------------------------------------------
    */
    public function all($c_type, $c_id)
    {
        $comments = $this->commentService->getByCTInfo($c_type, $c_id);
        return response()->json($comments);
    }
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'cType' => 'required',
            'cId' => 'required',
            'description' => 'required',
        ]);
        $data = $request->all();
        $comment = $this->commentService->create([
            'author' => $data['author'],
            'content_type' => $data['cType'],
            'content_id' => $data['cId'],
            'description' => $data['description'],
            'date' => date('Y-m-d')
        ]);
        return response()->json($comment);
    }
}
