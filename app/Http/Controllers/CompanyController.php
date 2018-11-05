<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        return view('company.create');
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

        $company = new Company();
        $company->user_id = $request['userid'];
        // $people->name = $request['name'];
        // $people->lastname = $request['lastname'];
        // $people->documentType = 1; //$request['documentType'];
        // $people->document = $request['document'];
        // $people->phone = $request['phone'];
        // $people->email = $request['email'];
        // $people->documentFile = $request['documentFile'];

        $company->save();

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $this->validate(request(),[
          //put fields to be validated here
        ]);

        $company->user_id = $request['userid'];
        // $people->name = $request['name'];
        // $people->lastname = $request['lastname'];
        // $people->documentType = 1; //$request['documentType'];
        // $people->document = $request['document'];
        // $people->phone = $request['phone'];
        // $people->email = $request['email'];
        // $people->documentFile = $request['documentFile'];

        $company->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
