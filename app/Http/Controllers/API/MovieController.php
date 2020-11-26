<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Services\MovieService;

class MovieController extends Controller
{
    //
    protected $movieService;
    public function __construct(MovieService $movieService)
    {   
        $this->movieService = $movieService;
    }
    
    public function all()
    {
        $movies = $this->movieService->getAll();
        return response()->json($movies);
    }
}
