<?php

namespace App\Http\Controllers;

use App\Salary;
use App\Vacant;
use App\Category;
use App\Location;
use App\Experience;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVacant;
use App\Http\Requests\SearchVacant;
use Illuminate\Support\Facades\File;

class VacantController extends Controller
{
    public function index()
    {
        $vacants = Vacant::where('user_id', auth()->user()->id)->latest()->simplePaginate(10);

        return view('vacants.index', compact('vacants'));
    }

    public function create()
    {
        $categories = Category::all();
        $experiences = Experience::all();
        $locations = Location::all();
        $salaries = Salary::all();

        return view('vacants.create', compact('categories', 'experiences', 'locations', 'salaries'));
    }

    public function store(StoreVacant $request)
    {
        auth()->user()->vacants()->create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'experience_id' => $request->experience,
            'location_id' => $request->location,
            'salary_id' => $request->salary,
            'skills' => $request->skills,
            'image' => $request->image
        ]);

        return redirect()->route('vacants.index');
    }

    public function show(Vacant $vacant)
    {
        // if ($vacant->active === 0) return abort(404);

        return view('vacants.show', compact('vacant'));
    }

    public function edit(Vacant $vacant)
    {
        /* checks if the user is the same as the user who created the vacancy */
        $this->authorize('view', $vacant);

        $categories = Category::all();
        $experiences = Experience::all();
        $locations = Location::all();
        $salaries = Salary::all();

        return view('vacants.edit', compact(
            'vacant',
            'categories',
            'experiences',
            'locations',
            'salaries'
        ));
    }

    public function update(StoreVacant $request, Vacant $vacant)
    {
        $this->authorize('update', $vacant);

        $vacant->title = $request->title;
        $vacant->category_id = $request->category;
        $vacant->experience_id = $request->experience;
        $vacant->location_id = $request->location;
        $vacant->salary_id = $request->salary;
        $vacant->description = $request->description;
        $vacant->skills = $request->skills;
        $vacant->image = $request->image;
        $vacant->save();

        return redirect()->route('vacants.index');
    }

    public function destroy(Vacant $vacant)
    {
        $this->authorize('delete', $vacant);

        $vacant->delete();

        return response()->json(['message' => 'Se ha eliminado la vacante ' . $vacant->title]);
    }

    public function search(SearchVacant $request)
    {
        $category = $request->category;
        $location = $request->location;

        $vacants = Vacant::latest()
            ->where('category_id', $category)
            ->where('location_id', $location)
            ->get();

        return view('search.index', compact('vacants'));
    }

    public function results()
    {
    }

    public function changeStatus(Request $request, Vacant $vacant)
    {
        $vacant->active = $request->status;
        $vacant->save();

        return response('vacant status successfully changed.', 200);
    }

    public function uploadImage(Request $request)
    {
        $image = $request->file;
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/vacants'), $imageName);

        return response('image successfully deleted uploaded', 200);
    }

    public function deleteImage(Request $request)
    {
        if ($request->ajax()) {
            $image = $request->get('image');

            if (File::exists('storage/vacants/' .  $image)) {
                File::delete('storage/vacants/' . $image);
            }

            return response('image successfully deleted', 200);
        }
    }
}
