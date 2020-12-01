<?php

namespace App\Services;

use App\Models\Comment;

class CommentService extends BaseService
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

	public function getAll()
	{
        $comments = Comment::all();
        foreach ($comments as $comment) {
            $comment = $this->getDetail($comment->id);
        }
        return $comments;
	}

	public function getById($id)
	{
		return Comment::find($id);
    }
    
    public function getDetail($id)
    {
        $comment = Comment::find($id);
        $c_type = $comment->content_type;
        $c_id = $comment->content_id;
        if ($c_type == 'movie')
            $comment->title = $this->movieService->getById($c_id)->title;
        else if ($c_type == 'show')
            $comment->title = $this->showService->getById($c_id)->title;
        else if ($c_type == 'episode')
            $comment->title = $this->episodeService->getById($c_id)->name;
        $comment->author = $comment->author_record;
        return $comment;
    }
    
    public function getByCTInfo($c_type, $c_id)
    {
        $comments = Comment::where(['content_type' => $c_type, 'content_id' => $c_id])->get();
        foreach ($comments as $comment) {
            $comment = $this->getDetail($comment->id);
        }
        return $comments;
    }
	public function create($data)
	{
		return Comment::create($data);
	}

	public function update($id, $data)
	{
		$category = $this->getById($id);
		return $category->update($data);
	}

	public function delete($id)
	{
		$category = $this->getById($id);
		return $category->delete();
	}

	public function search()
	{

	}
}
