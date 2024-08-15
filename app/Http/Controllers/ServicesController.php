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
    //show
    public function show($id)
    {
        $service = Service::findOrFail($id);
        $services = Service::all();
        return view('partials.services.service_details', ['service' => $service, 'services' => $services]);
    }
    //store
    public function store(Request $request)
    {

        try {
            // $request->validate([
            //     'image' => 'required',
            //     'title' => 'required',
            //     'description' => 'nullable',
            //     'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:4096'
            // ]);
            // die($request->all());
            //imagePath
            $imagePath = $request->file('image') ? $request->file('image')->store('services_images', 'public') : null;
            //request
            $service = new Service();
            $service->image = $imagePath;
            $service->title = $request->title;
            $service->description = $request->description;

            $service->save();
            // die($request->all());

            // save images list to the images table;
            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePaths = $image->store('service_images_list', 'public');
                    $service->images()->create([
                        'image' => $imagePaths,
                    ]);
                }
            }
            return redirect()->route('home');
        } catch (ValidationException $e) {
            return redirect()->route('home')->with('service-created', 'Votre service a été ajouté avec succès!');
        }
    }
    //edit
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('partials.services.service_edit', ['service' => $service]);
    }
    //update
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('home');
    }
    //delete
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('home');
    }
}
