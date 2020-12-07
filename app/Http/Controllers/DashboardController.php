<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\DownLogService;
use App\Services\ViewLogService;
use App\Services\VisitLogService;
use App\Services\CategoryService;
use App\Services\UserService;
class DashboardController extends Controller
{

    protected $downlogService;
    protected $viewlogService;
    protected $visitlogService;
    protected $categoryService;

    public function __construct(UserService $userService, DownLogService $downlogService, VisitLogService $visitlogService, ViewLogService $viewlogService, CategoryService $categoryService)
    {
        // $this->middleware('auth');
        // $this->middleware('role:admin');
        $this->userService = $userService;
        $this->downlogService = $downlogService;
        $this->visitlogService = $visitlogService;
        $this->viewlogService = $viewlogService;
        $this->categoryService = $categoryService;
    }
    //
    public function index()
    {
        //
        // return view('test');
        $downlogs = $this->downlogService->getAll();
        $viewlogs = $this->viewlogService->getAll();
        $visitlogs = $this->visitlogService->getAll();
        $topItems = $this->downlogService->topItems();
        $recentViews = $this->viewlogService->recent();
        $categories = $this->categoryService->getAll();
        $memships = $this->userService->aaa();
        return view("dashboard.index")
                ->with('downCount', count($downlogs))
                ->with('viewCount', count($viewlogs))
                ->with('visitCount', count($visitlogs))
                ->with('topItems', $topItems)
                ->with('categories', $categories)
                ->with('memships', $memships)
                ->with('recentViews', $recentViews);
    }
}
