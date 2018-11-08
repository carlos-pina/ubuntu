<?php

namespace App\Http\Controllers;

use App\Companies;
use App\DocumentTypes;
use App\Services;
use App\ServiceDetails;
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
        $serviceDetails = ServiceDetails::all();
        return view('companies.create', compact('documents', 'services', 'serviceDetails'));
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
          //put fields to be validated here
        ]);

        $companies = new Companies();
        $companies->user_id = $request['userid'];
        // $people->name = $request['name'];
        // $people->lastname = $request['lastname'];
        // $people->documentType = 1; //$request['documentType'];
        // $people->document = $request['document'];
        // $people->phone = $request['phone'];
        // $people->email = $request['email'];
        // $people->documentFile = $request['documentFile'];

        $companies->save();

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
        return view('companies.edit')->with('companies', $companies);
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
        $this->validate(request(),[
          //put fields to be validated here
        ]);

        $companies->user_id = $request['userid'];
        // $people->name = $request['name'];
        // $people->lastname = $request['lastname'];
        // $people->documentType = 1; //$request['documentType'];
        // $people->document = $request['document'];
        // $people->phone = $request['phone'];
        // $people->email = $request['email'];
        // $people->documentFile = $request['documentFile'];

        $companies->save();

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
}
