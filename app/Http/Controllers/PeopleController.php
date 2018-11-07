<?php

namespace App\Http\Controllers;

use App\People;
use App\DocumentTypes;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $documents = DocumentTypes::all();
        return view('people.create', compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'lastname' => 'required',
            'documentType' => 'required',
            'document' => 'required',
            'phone' => 'required'
        ]);

        $people = new People();
        $people->user_id = $request['userid'];
        $people->name = $request['name'];
        $people->lastname = $request['lastname'];
        $people->documentType = $request['documentType'];
        $people->document = $request['document'];
        $people->phone = $request['phone'];
        $people->email = $request['email'];
        $people->documentFile = $request['documentFile'];

        $people->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        $documents = DocumentTypes::all();
        return view('people.edit', compact('people', 'documents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        $this->validate(request(),[
            'name' => 'required',
            'lastname' => 'required',
            'documentType' => 'required',
            'document' => 'required',
            'phone' => 'required'
        ]);

        $people->user_id = $request['userid'];
        $people->name = $request['name'];
        $people->lastname = $request['lastname'];
        $people->documentType = $request['documentType'];
        $people->document = $request['document'];
        $people->phone = $request['phone'];
        $people->email = $request['email'];
        $people->documentFile = $request['documentFile'];

        $people->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //
    }
}
