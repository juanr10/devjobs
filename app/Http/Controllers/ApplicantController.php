<?php

namespace App\Http\Controllers;

use App\Vacant;
use App\Applicant;
use Illuminate\Http\Request;
use App\Http\Requests\StoreApplicant;
use App\Notifications\NewApplicant;

class ApplicantController extends Controller
{
    public function index(Vacant $vacant)
    {
        /* Only the recruiter can see the applicants for their own vacancies */
        $this->authorize('view', $vacant);

        return view('applicants.index', compact('vacant'));
    }

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

        $vacant->applicants()->create([
            'name' => $request->name,
            'email' => $request->email,
            'cv' => $fileName
        ]);

        //notify recruiter
        $recruiter = $vacant->user;
        $recruiter->notify(new NewApplicant($vacant));

        return back()->with('suscription', 'Sus datos se han enviado correctamente.');
    }
}
