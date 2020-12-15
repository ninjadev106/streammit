<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Membership;
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

    public function all()
    {
        // $memships = Membership::all();
        $memships = Membership::where('name', '!=', 'Free Trial')->get();
        return response()->json($memships);
    }
}
