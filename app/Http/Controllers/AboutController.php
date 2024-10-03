<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Stats;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $stats = Stats::all();
        $about = About::first();
        return view('partials.about.index', ['stats' => $stats, 'about' => $about]);
    }

    public function edit($id)
    {
        $about = About::find($id);
        return view('partials.about.edit', ['about' => $about]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'nullable',
                'description' => 'nullable',
                'image' => 'nullable',
                'mission' => 'nullable',
                'vision' => 'nullable',
            ]);
            $about = About::find($id);
            $about->title = $request->title;
            $about->description = $request->description;
            $about->image = $request->image;
            $about->mission = $request->mission;
            $about->vision = $request->vision;
            $about->save();
            return redirect()->route('about.edit')->with('success', 'Les details sont mis à jour avec succès');
        } catch (\Throwable) {
            return redirect()->route('about.edit')->with('error', 'Erreur lors de la mise à jour des details');
        }
    }
}
