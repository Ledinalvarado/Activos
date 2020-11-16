<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

//        $companies = Company::all();
        $companies = Company::withTrashed()->get();
        return view('companies.index')->with(compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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

        $this->validate($request, [
            'nombre' => 'required'
        ], [
            'nombre.required' => 'Es necesario ingresar un nombre para la categoría.'
        ]);
        $company = new Company();
        $company::create($request->all());
//        Company::create($request->all());
//        return back();
        return back()->with('notification','La empresa ha sido creada con exito');
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
    public function edit(Company $company, $id)
    {
        //
        $compan = Company::findOrFail($id);
        return view('companies.index')->with(compact('compan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company, $id)
    {
        //
        Company::find($id)->update($request->all());
        return back()->with('notification', 'La empresa se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company,$id)
    {
        //
        $company = new Company();
        $company::find($id)->delete();

        return back()->with('notification', 'La empresa se ha deshabilitado correctamente.');
    }

    public function restore($id)
    {
        $company = new Company();
        $company::withTrashed()->find($id)->restore();

        return back()->with('notification', 'La empresa se ha habilitado correctamente.');
    }
}
