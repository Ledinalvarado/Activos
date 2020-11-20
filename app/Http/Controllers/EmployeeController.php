<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use App\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::all();
        $employee_users = User::all();
//        echo $employee_users;
        $employees = Employee::withTrashed()->get();
        return view('employees.index')->with(compact('employees', 'employee_users','companies'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nombre' => 'required'
        ], [
            'nombre.required' => 'Es necesario ingresar un nombre para el empleado.'
        ]);
        $employee = new Employee();
//        $employee::create($request->all());
//        echo $employee;
        $employee->nombre = $request->input('nombre');
        $employee->telefono = $request->input('telefono');
        $employee->email = $request->input('email');
        $employee->company_id =Company::find($request->input('company_id'));
        echo $employee;
        $employee->save();

        return back()->with('notification', 'El empleado ha sido creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee = new Employee();
        $employee::find($id)->delete();
        return back()->with('notification', 'El empleado se ha dado de baja correctamente.');


    }

    public function restore($id){
        $employee = new Employee();
        $employee::withTrashed()->find($id)->restore();

        return back()->with('notification','El empleado se ha habilitado con exito');
    }
}
