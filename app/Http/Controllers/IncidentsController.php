<?php

namespace App\Http\Controllers;

use App\Models\incidents;
use App\Models\priority;
use App\Models\categories;
use App\Models\departments;
use App\Models\users;
use App\Models\User;
use App\Models\incidentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidents = Incidents::all();
        return view('incidents.index',['incidents' => $incidents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $priorities = Priority::all();
        $categories = Categories::all();
        $departments = Departments::all();
        $users = users::all();
        $incidentStatuses = IncidentStatus::all();
        $priorities = Priority::all();
        return view('incidents.create', ['priorities'=>$priorities,'categories'=>$categories, 'departments'=>$departments, 'users'=>$users, 'incidentStatuses'=>$incidentStatuses]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $incident = new incidents();
        $incident->tituloIncidencias = $request->tituloIncidencias;
        $incident->descripcionIncidencias = $request->descripcionIncidencias;
        $incident->tiempoIncidencia = $request->tiempoIncidencia;
        $incident->idCategoria = $request->idCategoria;
        $incident->idDepartamento = $request->idDepartamento;
        $incident->idUsuarios = auth()->user()->id;
        $incident->idEstadoDeIncidencias = $request->idEstadoDeIncidencias;
        $incident->idPrioridad = $request->idPrioridad;
        dd($incident);
        $incident->save();
        return redirect()->route('incidents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(incidents $incident)
    {
        return view('incidents.show',['incident'=>$incident]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(incidents $incident)
    {
        $priorities = Priority::all();
        return view('incidents.edit',['incident'=>$incident], ['priorities'=>$priorities]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, incidents $incident)
    {
        $incident->TituloIncidencias = $request->TituloIncidencias;
        $incident->descripcionIncidencias = $request->descripcionIncidencias;
        $incident->tiempoIncidencia = $request->tiempoIncidencia;
        $incident->idPrioridad = $request->idPrioridad;
        $incident->save();
        return view('incidents.show',['incident'=>$incident]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(incidents $incident)
    {
        $incident->delete();
        return redirect()->route('incidents.index');
    }
}
