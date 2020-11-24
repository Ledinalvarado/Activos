<?php

namespace App\Http\Controllers;

use App\Active;
use Illuminate\Console\Scheduling\ScheduleRunCommand;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //se obtiene el id de la empresa a la cual pertenece para que se muestren los registros de esa empersa unicamente
        $user_company_id = auth()->user()->company_id;
        $activos = Active::where('company_id', $user_company_id)->get();

//            $activos = Active::all();
//        $activos = Active::paginate(4);
        return view('activos.index')->with(compact('activos'));


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
        $activos = new Active();
//        $activos::create($request->all());
        $user_company_id = auth()->user()->company_id;
        $activos->nombre = $request->input('nombre');
        $activos->descripcion = $request->input('descripcion');
        $activos->fecha_ingreso = $request->input('fecha_ingreso');
//        $filename = $request->file->getClientOriginalName();
//        $activos->foto = $request->file('foto')->storeAs('s/',$filename);

        $activos->foto = $request->file('foto')->store('public');
        $activos->company_id =  $user_company_id;
//        $foto_url = $request->file('foto')->storeAs('activos','activo');


        $activos->save();

        return back()->with('notification', 'El activo fue registrado con exito');
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
    }
}
