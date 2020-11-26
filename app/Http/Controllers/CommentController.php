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
}
