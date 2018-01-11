<?php

namespace Dadavel\Http\Controllers;

use Dadavel\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::check())
            {
        $companies = Company::where('user_id', Auth::user()->id)->get();

        return view('companies.index', ['companies'=> $companies]);
        }

        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        if(Auth::check())
            {
                $company = Company::create([
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'user_id' => Auth::user()->id
                    ]);

                if($company)
                {
                    return redirect()->route('companies.show', ['company'=> $company->id])
                        ->with('success', 'Company Created Successfully');
                }
            }

            return back()->withInput()->with('errors', 'Error creating new company');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Dadavel\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //method 1

       //$company = Company::where('id', $company->id)->first();

        //method 2
        $company = Company::find($company->id);

        return view('companies.show', ['company'=>$company]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Dadavel\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
         $company = Company::find($company->id);

          return view('companies.edit', ['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Dadavel\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, company $company)
    {
        //
        $companyUpdate = Company::where('id', $company->id)->update(
                [
                   'name' => $request->input('name'),   
                   'description' => $request->input('description')  
                ]);

        if($companyUpdate)
        {
            return redirect()->route('companies.show', ['company'=> $company->id])->with('success' , 'Company Updated Successfully');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Dadavel\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        //
        $findCompany = Company::find($company->id);
        if($findCompany->delete())
        {
            //redirection to index.blade.php 
            return redirect()->route('companies.index')
            ->with('success', 'Company deleted Successfully');
        }

        return back()->withInput()->with('error', 'Company could not be deleted');
    }
}
