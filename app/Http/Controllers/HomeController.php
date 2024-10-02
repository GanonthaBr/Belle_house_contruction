<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Realisation;
use Symfony\Component\HttpFoundation\Request;


class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->take(6)->get();
        $services = Service::orderBy('created_at', 'asc')->take(3)->get();
        $realisations = Realisation::orderBy('created_at', 'desc')->take(6)->get();
        $partners = Partner::all();
        $blogs = Blog::all();
        return view('home', ['projects' => $projects, 'partners' => $partners, 'blogs' => $blogs, 'realisations' => $realisations, 'services' => $services]);
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
        return 'yes';
    }

    public function stats_store(Request $request)
    {
        return 'stats';
    }

    public function stats_edit()
    {
        return 'stats form edit';
    }

    public function stats_update(Request $request, $id)
    {
        return 'stats update';
    }
}
