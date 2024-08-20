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
    //allblogs
    public function allblogs()
    {
        $blogs = Blog::all();
        return view('partials.admin.allblogs', ['blogs' => $blogs]);
    }
    //show
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('partials.blog.blog_details', ['blog' => $blog]);
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
                'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:8192'
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


            // save images list to the images table;
            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePaths = $image->store('blog_images_list', 'public');
                    $blog->images()->create([
                        'image' => $imagePaths,
                    ]);
                }
            }

            return redirect()->route('home')->with('blog-created', 'Votre blog post été ajouté avec succès!');
        } catch (ValidationException $e) {

            return response()->json(['message' => $e->getMessage()]);
        }
    }
    //edit
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('partials.blog.blog_edit', ['blog' => $blog]);
    }
    //update
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'author' => 'nullable',
                'image' => 'nullable|image|max:5120',
                'images.*' => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:8192'
            ]);
            //image path
            $imagePath = $request->file('image') ? $request->file('image')->store('blog_images', 'public') : null;

            //sanitize with HTMLPurifier

            $config = HTMLPurifier_Config::createDefault();
            $purifier = new HTMLPurifier($config);
            $dirty_html = $request->content;
            $clean_html = $purifier->purify($dirty_html);

            //create blog
            $blog = Blog::findOrFail($id);
            $blog->title = $request->title;
            $blog->content = $clean_html;
            $blog->image = $imagePath;
            $blog->author = $request->author ?? Auth::user()->name;
            $blog->save();
            //images
            if ($request->file('images')) {
                foreach ($request->file('images') as $image) {
                    $imagePaths = $image->store('blog_images_list', 'public');
                    $blog->images()->create([
                        'image' => $imagePaths,
                    ]);
                }
            }
            return redirect()->route('home')->with('blog-updated', 'Votre blog post a été mis à jour avec succès!');
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
    //delete
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('home')->with('blog-deleted', 'Votre blog post a été supprimé avec succès!');
    }
}
