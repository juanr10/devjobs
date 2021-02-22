<?php

namespace App\Http\Controllers;

use App\Vacant;
use Illuminate\Http\Request;

class VacantController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vacants.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function show(Vacant $vacant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacant $vacant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacant $vacant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vacant  $vacant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacant $vacant)
    {
        //
    }
}
