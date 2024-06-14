<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->take(6)->get();
        $services = Service::all();
        $partners = Partner::all();
        $blogs = Blog::all();
        return view('home', ['projects' => $projects, 'partners' => $partners, 'blogs' => $blogs, 'services' => $services]);
    }
    public function realisations()
    {
        return view('partials.realisations.index');
    }
}
