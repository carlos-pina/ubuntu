<?php

namespace App\Http\Controllers;

use App\Companies;
use App\DocumentTypes;
use App\Services;
use Illuminate\Http\Request;

class CompaniesController extends Controller
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
        $services = Services::all();
        return view('companies.create', compact('documents', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $companies = new Companies();
        $this->ValidateAndSave($request, $companies);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companies  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Companies $companies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function edit(Companies $companies)
    {
        $documents = DocumentTypes::all();
        return view('companies.edit', compact('companies', 'documents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companies  $companies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companies $companies)
    {
        $this->ValidateAndSave($request, $companies);

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companies $companies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companies $companies)
    {
        //
    }

    private function ValidateAndSave(Request $request, Companies $companies)
    {
        $this->validate(request(),[
            'name' => 'required',
            'owner' => 'required',
            'documentType' => 'required',
            'document' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'description' => 'required',
            'activities' => 'required',
            'serviceDetails' => 'required'
        ]);


        $companies->user_id = $request['userid'];
        $companies->name = $request['name'];
        $companies->owner = $request['owner'];
        $companies->documentType = $request['documentType'];
        $companies->document = $request['document'];
        $companies->phone = $request['phone'];
        $companies->email = $request['email'];
        $companies->address = $request['address'];
        $companies->description = $request['description'];
        $companies->activities = $request['activities'];
        $companies->serviceDetail = $request['serviceDetails'];

        $companies->save();
    }
}
