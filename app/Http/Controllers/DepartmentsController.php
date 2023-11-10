<?php

namespace App\Http\Controllers;

use App\Models\departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Departments::all();

        return view('departments.index',['departments' => $departments]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $department =  new departments();
        $department -> nombreDepartamento =  $request ->nombreDepartamento;
        $department->save();
        return redirect()->route('departments.index');
    }
  /**
     * Display the specified resource.
     */
    public function show(departments $department)
    {
        return view('departments.show',['department'=>$department]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departments $department)
    {
        return view('departments.formulario',['department'=>$department]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, departments $department)
    {
        $department->nombreDepartamento =  $request->nombreDepartamento;
        $department->save();
        return view('departments.show', ['department' => $department]);
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(departments $department)
    {
        try {
            $department->delete();
            return redirect()->route('departments.index');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'No se pudo borrar el departamento porque tiene incidencias o usuarios asignados');

        }
    }
}
