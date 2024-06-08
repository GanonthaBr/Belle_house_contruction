<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('partials.services.index', ['services' => $services]);
    }

    //create
    public function create()
    {
        return view('partials.services.service_create');
    }
    //store
    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required',
                'title' => 'required',
                'description' => 'required',
            ]);
            //imagePath
            $imagePath = $request->file('image') ? $request->file('image')->store('services_images', 'public') : null;
            //request
            $service = new Service();
            $service->image = $imagePath;
            $service->title = $request->title;
            $service->description = $request->description;
            $service->save();
        } catch (ValidationException $e) {
            return redirect()->route('home')->with('service-created', 'Votre service a été ajouté avec succès!');
        }
    }
}
