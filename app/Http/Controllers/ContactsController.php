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

    //show
    public function delete(Request $request, $id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();
        return redirect()->route('admin')->with('message-deleted', 'Message supprime avec succes!');
    }
    public function messages(Request $request)
    {
        return view('partials.admin.messages_list');
    }
    public function show(Request $request, $id)
    {
        $message = Contact::findOrFail($id);
        return view('partials.admin.message_details', ['message' => $message]);
    }
}
