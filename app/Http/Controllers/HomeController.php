<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Team;
use App\Models\About;
use App\Models\Stats;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Realisation;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Dotenv\Exception\ValidationException;



class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->take(6)->get();
        $services = Service::orderBy('created_at', 'asc')->take(3)->get();
        $realisations = Realisation::orderBy('created_at', 'desc')->take(6)->get();
        $partners = Partner::all();
        $blogs = Blog::all();
        $stats = Stats::all();
        return view('home', ['projects' => $projects, 'partners' => $partners, 'blogs' => $blogs, 'realisations' => $realisations, 'services' => $services, 'stats' => $stats]);
    }

    public function admin()
    {
        $projects = Project::all();
        $services = Service::all();
        $blogs = Blog::all();
        $realisations = Realisation::all();
        $partners = Partner::all();
        $contacts = Contact::all();
        $project_number = $projects->count();
        $service_number = $services->count();
        $realisation_number = $realisations->count();
        $partner_number = $partners->count();
        $blog_number = $blogs->count();
        return view('admin', [
            'projects' => $partner_number,
            'services' => $service_number,
            'blogs' => $blog_number,
            'realisations' => $realisation_number,
            'partners' => $partner_number,
            '$contacts' => $contacts
        ]);
    }
    public function contacts()
    {
        $contacts = Contact::all();
        // dd($contacts);
        return view('partials.admin.mainheader', ['contacts' => $contacts]);
    }


    //stats
    public function stats()
    {
        $stats = Stats::all();
        $abouts = About::all();
        return view('partials.admin.stats.index', ['stats' => $stats, 'abouts' => $abouts]);
    }



    public function stats_edit($id)
    {
        $stats = Stats::find($id);
        return view('partials.admin.stats.update_stats', ['stats' => $stats]);
    }

    public function stats_update(Request $request, $id)
    {
        try {
            $request->validate([
                'projets' => 'required',
                'clients' => 'required'
            ]);

            $stats = Stats::find($id);

            $stats->projects = $request->projets;
            $stats->clients = $request->clients;
            $stats->save();

            return redirect()->route('stats')->with('success', 'Statistiques mises à jour avec succès');
        } catch (\Throwable) {
            return redirect()->route('stats')->with('error', 'Erreur lors de la mise à jour des statistiques');
        }
    }



    //testimonials
    public function testimonials()
    {
        $testimonials = Testimonial::all();
        return view('partials.admin.testimonials.testimonials_list', ['testimonials' => $testimonials]);
    }
    public function testimonial_create()
    {
        return view('partials.admin.testimonials.create_testimonials');
    }
    public function testimonial_edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('partials.admin.testimonials.update_testimonials', ['testimonial' => $testimonial]);
    }
    public function testimonial_store(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required',
                'message' => 'required',
                'image' => 'required'
            ]);

            $testimonial = new Testimonial();
            $testimonial->name = $request->name;
            $testimonial->message = $request->message;
            $testimonial->image = $request->image;
            $testimonial->save();

            return redirect()->route('testimonials')->with('success', 'Témoignage ajouté avec succès');
        } catch (\Throwable) {
            return redirect()->route('testimonials')->with('error', 'Erreur lors de l\'ajout du témoignage');
        }
    }

    public function testimonial_update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'nullable',
                'message' => 'nullable',
                'image' => 'nullable'
            ]);

            $testimonial = Testimonial::find($id);

            $testimonial->name = $request->name;
            $testimonial->message = $request->message;
            $testimonial->image = $request->image;
            $testimonial->save();

            return redirect()->route('testimonials')->with('success', 'Témoignage mis à jour avec succès');
        } catch (ValidationException $e) {
            return redirect()->route('testimonials')->with('error', $e->getMessage());
        } catch (\Throwable $e) {
            dd($e->getMessage());
            return redirect()->route('testimonials')->with('error', 'Erreur lors de la mise à jour du témoignage');
        }
    }
    public function testimonial_destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->route('testimonials')->with('success', 'Témoignage supprimé avec succès');
    }

    //team

    //all
    public function team()
    {
        $teams = Team::all();
        return view('partials.team.index', ['teams' => $teams]);
    }
    //all team
    public function allteam()
    {
        $teams = Team::all();
        return view('partials.admin.team.index', ['teams' => $teams]);
    }

    //create
    public function team_create()
    {
        return view('partials.team.create');
    }
    //store
    public function team_store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'nullable',
                'position' => 'nullable',
                'image' => 'nullable',
                'facebook' => 'nullable',
                'twitter' => 'nullable',
                'linkedin' => 'nullable',
                'email' => 'nullable',
                'phone' => 'nullable'
            ]);
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('Team_images', 'public') : null;

            $team = new Team();
            $team->name = $request->name;
            $team->position = $request->position;
            $team->image = $imagePath;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->linkedin = $request->linkedin;
            $team->email = $request->email;
            $team->phone = $request->phone;
            $team->save();

            return redirect()->route('team_list')->with('success', 'Membre ajouté avec succès');
        } catch (\Throwable) {
            return redirect()->route('team_list')->with('error', 'Erreur lors de l\'ajout du membre');
        }
    }
    //edit
    public function team_edit($id)
    {
        $team = Team::find($id);
        return view('partials.team.update', ['team' => $team]);
    }
    //update
    public function team_update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'nullable',
                'position' => 'nullable',
                'image' => 'nullable',
                'facebook' => 'nullable',
                'twitter' => 'nullable',
                'linkedin' => 'nullable',
                'email' => 'nullable',
                'phone' => 'nullable'
            ]);
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('Team_images', 'public') : null;

            $team = Team::find($id);

            $team->name = $request->name;
            $team->position = $request->position;
            $team->image = $imagePath;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->linkedin = $request->linkedin;
            $team->email = $request->email;
            $team->phone = $request->phone;
            $team->save();

            return redirect()->route('team_list')->with('success', 'Membre mis à jour avec succès');
        } catch (\Throwable) {
            return redirect()->route('team_list')->with('error', 'Erreur lors de la mise à jour du membre');
        }
    }
    //destroy
    public function team_destroy($id)
    {
        try {
            $team = Team::find($id);
            $team->delete();
            return redirect()->route('team_list')->with('success', 'Membre supprimé avec succès');
        } catch (\Throwable) {
            return redirect()->route('team_list')->with('error', 'Erreur lors de la suppression du membre');
        }
    }
}
