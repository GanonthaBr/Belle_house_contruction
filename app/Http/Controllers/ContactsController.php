<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
                'message' => 'required',
                'nom' => 'required',
                'email' => 'nullable',
                'topic' => 'nullable'
            ]);

            //requests
            $contact = new Contact();
            $contact->nom = $request->nom;
            $contact->content = $request->message;
            $contact->topic = $request->topic;
            $contact->email = $request->email;
            // dd($request->all());


            $contact->save();
            return redirect()->back();
        } catch (ValidationException $e) {
            return
                response()->json(['message' => $e->getMessage()]);
        }
    }

    //stores


}
