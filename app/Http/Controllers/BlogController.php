<?php

namespace App\Http\Controllers;

use HTMLPurifier;
use App\Models\Blog;
use HTMLPurifier_Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Dotenv\Exception\ValidationException;

class BlogController extends Controller
{
    //index
    public function index()
    {
        $blogs = Blog::all();
        return view('partials.blog.index', ['blogs' => $blogs]);
    }

    //create
    public function create()
    {
        return view('partials.blog.blog_create');
    }
    // Store a blog
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'author' => 'nullable',
                'image' => 'nullable|image|max:5120',
            ]);
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('blog_images', 'public') : null;

            //sanitize with HTMLPurifier

            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_html = $request->content;
            $clean_html = $purifier->purify($dirty_html);

            //create blog
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->content = $clean_html;
            $blog->image = $imagePath;
            $blog->author = $request->author ?? Auth::user()->name;
            $blog->save();
            Log::info('Blog post created successfully.', ['id' => $blog->id]);
            return redirect()->route('home')->with('blog-created', 'Votre blog post été ajouté avec succès!');
        } catch (ValidationException $e) {
            Log::error('Error creating blog post: ' . $e->getMessage(), [
                'stack' => $e->getTraceAsString(),
                'input' => $request->all(),
            ]);
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
