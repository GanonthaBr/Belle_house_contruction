<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $blogs = Blog::all();
        return view('home', ['projects' => $projects, 'blogs' => $blogs]);
    }
    public function realisations()
    {
        return view('partials.realisations.index');
    }
}
