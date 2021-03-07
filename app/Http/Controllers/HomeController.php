<?php

namespace App\Http\Controllers;

use App\Vacant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __invoke(Request $request)
    {
        $vacants = Vacant::latest()->where('active', true)->take(10)->get();

        return view('home', compact('vacants'));
    }
}
