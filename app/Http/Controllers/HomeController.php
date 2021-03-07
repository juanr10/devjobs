<?php

namespace App\Http\Controllers;

use App\Salary;
use App\Vacant;
use App\Location;
use App\Experience;
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
        $locations = Location::all();
        $experiences = Experience::all();
        $salaries = Salary::all();

        return view('home', compact(
            'vacants',
            'experiences',
            'locations',
            'salaries'
        ));
    }
}
