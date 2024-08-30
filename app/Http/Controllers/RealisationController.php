<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;

class RealisationController extends Controller
{
    //index
    public function index()
    {
        $realisations = Realisation::all();
        return view('partials.realisations.index', ['realisations' => $realisations]);
    }
    //all realisations
    public function allrealisations()
    {
        $realisation_list = Realisation::all();
        return view('partials.admin.realisation_list', ['realisation_list' => $realisation_list]);
    }
    //create
    public function create()
    {
        return view('partials.admin.create_realisation');
    }

    //show
    public function show($id)
    {
        $realisation = Realisation::findOrFail($id);
        return view('partials.realisations.realisation_details', ['realisation' => $realisation]);
    }
    // store
    public function store(Request $request)
    {
        try {
            //validate
            $request->validate([
                'name' => 'required',
                'task' => 'required',
                'area' => 'required',
                'country' => 'required',
                'city' => 'required',
                'year' => 'nullable',
                'maitre_doeuvre' => 'nullable',
                'video' => 'nullable',
                'image' => 'nullable|image|max:10240',
                'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:4096'

            ]);
            //getting the requested data
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('realisation_images', 'public') : null;

            //create new Project
            $realisation = new Realisation();
            $realisation->name = $request->name;
            $realisation->task = $request->task;
            $realisation->area = $request->area;
            $realisation->city = $request->city;
            $realisation->country = $request->country;
            $realisation->year = $request->year;
            $realisation->maitre_doeuvre = $request->maitre_doeuvre;
            $realisation->video = $request->video;
            $realisation->image = $imagePath;

            //save
            $realisation->save();

            // save images list to the images table;
            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePaths = $image->store('realisation_images_list', 'public');
                    $realisation->images()->create([
                        'image' => $imagePaths,
                    ]);
                }
            }
            return redirect()->route('home');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    //edit
    public function edit($id)
    {
        $realisation = Realisation::findOrFail($id);
        return view('partials.realisations.edit_realisation', ['realisation' => $realisation]);
    }
    //update
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'task' => 'required',
                'area' => 'required',
                'country' => 'required',
                'city' => 'required',
                'year' => 'nullable',
                'maitre_doeuvre' => 'nullable',
                'video' => 'nullable',
                'image' => 'nullable|image|max:10240',
                'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:4096'
            ]);
            //getting the requested data
            $realisation = Realisation::findOrFail($id);
            $realisation->name = $request->name;
            $realisation->task = $request->task;
            $realisation->area = $request->area;
            $realisation->city = $request->city;
            $realisation->country = $request->country;
            $realisation->year = $request->year;
            $realisation->maitre_doeuvre = $request->maitre_doeuvre;
            $realisation->video = $request->video;
            $realisation->image = $request->file('image') ? $request->file('image')->store('realisation_images', 'public') : $realisation->image;

            //save
            $realisation->save();

            // save images list to the images table;
            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePaths = $image->store('realisation_images_list', 'public');
                    $realisation->images()->create([
                        'image' => $imagePaths,
                    ]);
                }
            }
            return redirect()->route('home');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    //destroy
    public function destroy($id)
    {
        $realisation = Realisation::findOrFail($id);
        $realisation->delete();
        return redirect()->route('home');
    }
}
