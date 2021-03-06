<?php

namespace App\Http\Controllers;

use App\Vacant;
use App\Applicant;
use Illuminate\Http\Request;
use App\Http\Requests\StoreApplicant;
use App\Notifications\NewApplicant;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(StoreApplicant $request)
    {
        //store pdf
        if ($request->file('cv')) {
            $file = $request->file('cv');
            $fileName = time() . "." . $request->file('cv')->extension();
            $path = public_path("/storage/cv");
            $file->move($path, $fileName);
        }

        $vacant = Vacant::find($request->vacant_id);

        // if (!$vacant) {
        //     return 'No se ha encontrado vacante';
        // } -> validar luego con flash

        $vacant->applicants()->create([
            'name' => $request->name,
            'email' => $request->email,
            'cv' => $fileName
        ]);

        //notifty recruiter
        $recruiter = $vacant->user;
        $recruiter->notify(new NewApplicant($vacant->title));

        return back()->with('status', '¡Tus datos se han enviado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
