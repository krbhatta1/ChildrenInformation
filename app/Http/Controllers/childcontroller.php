<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\child;

class childcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate(
        [
            'first_name'=> ['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'middle_name'=> ['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'last_name'=> ['required', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'age'=> ['required', 'numeric'],
            'gender'=>'required',
            'address'=> ['nullable', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'city'=> ['nullable', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'state'=> ['nullable', 'regex:/^[a-zA-Z0-9\s]+$/'],
            'country'=>'nullable',
            'zip'=> ['nullable', 'numeric']
        ]
    );

            $child = new child;
            $child->ChildFirstName = $request['first_name'];
            $child->ChildMiddleName = $request['middle_name'];
            $child->ChildLastName = $request['last_name'];
            $child->ChildAge = $request['age'];
            $child->ChildGender = $request['gender'];
            $child->ChildAddress = $request['address'];
            $child->ChildCity = $request['city'];
            $child->ChildState = $request['state'];
            $child->ChildCountry = $request['country'];
            $child->ChildZipCode = $request['zip'];
            $child->save();

            return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $childs = child::all();
        return view('home',['child'=>$childs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $ = child::find($id);
        // print_r($abc);
    }
}
