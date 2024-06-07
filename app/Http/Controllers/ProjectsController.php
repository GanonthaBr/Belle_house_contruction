<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects  = Project::all();
        return view('partials.projects.index', ['projects' => $projects]);
    }

    //create
    public function create()
    {
        return view('partials.projects.project_create');
    }
    //store
    public function store(Request $request)
    {
        try {
            //validate
            $request->validate([
                'name' => 'required',
                'type' => 'required',
                'area' => 'required',
                'country' => 'required',
                'city' => 'required',
                'image' => 'nullable|image|max:5120',

            ]);
            //getting the requested data
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('project_images', 'public') : null;

            //create new Project
            $project = new Project();
            $project->name = $request->name;
            $project->type = $request->type;
            $project->area = $request->area;
            $project->city = $request->city;
            $project->country = $request->country;
            $project->image = $imagePath;

            //save
            $project->save();
            return redirect()->route('home');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
