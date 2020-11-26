<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    public function __construct()
    {

    }
    public function index()
    {
        return view('rating.index');
    }
}
