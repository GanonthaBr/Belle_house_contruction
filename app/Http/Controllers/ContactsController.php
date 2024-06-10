<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Modal;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return view('partials.contacts.index');
    }
    //create
    public function create()
    {
        return view('partials.contacts.index');
    }
    //store
    public function store(Request $request)
    {
        try {
            //validate input
            $request->validate([
                'content' => 'required',
                'nom' => 'required',
                'email' => 'nullable',
                'topic' => 'nullable'
            ]);

            //requests
            $contact = new Contact();
            $contact->nom = $request->nom;
            $contact->content = $request->content;
            $contact->topic = $request->topic;
            $contact->email = $request->email;

            $contact->save();
            return redirect()->back();
        } catch (ValidationException $e) {
            return
                response()->json(['message' => $e->getMessage()]);
        }
    }

    //stores

    public function stores(Request $request)
    {
        try {
            //validate
            $request->validate([
                'name' => 'required',
                'lastname' => 'required',
                'phone' => 'nullable',
                'service' => 'nullable',
                'content' => 'nullable'
            ]);

            //requests
            $modal = new Modal();
            $modal->name = $request->name;
            $modal->lastname = $request->lastname;
            $modal->phone = $request->phone;
            $modal->service = $request->service;
            $modal->content = $request->content;

            //save
            $modal->save();

            //return
            return redirect()->back();
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
