<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //retrieve all partners
    public function index()
    {
        $partners  = Partner::all();
        return view('partials.partners.partners', ['partners' => $partners]);
    }
    //create
    public function create()
    {
        return view('partials.partners.create_partner');
    }

    //delete

    public function destroy($id)
    {
        $partner = Partner::find($id);
        $partner->delete();
        return redirect()->back();
    }

    //store
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('blog_images', 'public') : null;

            $partner = new Partner();
            $partner->name = $request->name;
            $partner->image = $imagePath;
            $partner->save();
            return redirect()->route('home')->with('partner-created', 'Votre partenaire a été ajouté avec succès!');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
