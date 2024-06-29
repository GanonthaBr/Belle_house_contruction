<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Realisation;
use App\Models\Service;
use Illuminate\Http\Request;

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
}
