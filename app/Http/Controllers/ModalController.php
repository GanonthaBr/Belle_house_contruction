<?php

namespace App\Http\Controllers;

use App\Models\Modal;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;

class ModalController extends Controller
{
    public function store(Request $request)
    {
        try {
            //validate
            $request->validate([
                'name' => 'required',
                'lastname' => 'required',
                'phone' => 'nullable',
                'service' => 'nullable',
                'contentmessage' => 'nullable'
            ]);

            //requests
            $modal = new Modal();
            $modal->name = $request->name;
            $modal->lastname = $request->lastname;
            $modal->phone = $request->phone;
            $modal->service = $request->service;
            $modal->content = $request->contentmessage;
            // dd($request->all());
            //save
            $modal->save();

            //return
            return redirect()->back();
        } catch (ValidationException $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }
}
