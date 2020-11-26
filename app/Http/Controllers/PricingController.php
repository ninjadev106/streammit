<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    //
    public function __construct()
    {

    }
    public function index()
    {
        return view('pricing.index');
    }
}
