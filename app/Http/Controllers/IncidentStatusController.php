<?php

namespace App\Http\Controllers;

use App\Models\incidentStatus;
use Illuminate\Http\Request;

class IncidentStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidentStatus = IncidentStatus::all();
        return view('incident_statuses.index',['incidentStatus' => $incidentStatus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incident_statuses.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $incidentStatus = new incidentStatus();
       $incidentStatus->nombreEstadoDeIncidencias = $request->nombreEstadoDeIncidencias;
       $incidentStatus->ordenEstadoDeIncidencias = $request->ordenEstadoDeIncidencias;
       $incidentStatus->save();
       return redirect()->route('incident_statuses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(incidentStatus $incidentStatus)
    {
        return view('incident_statuses.show',['incidentStatus'=>$incidentStatus]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(incidentStatus $incidentStatus)
    {
        //$incidentStatus = IncidentStatus::all();
        return view('incident_statuses.formulario',['incidentStatus' => $incidentStatus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, incidentStatus $incidentStatus)
    {

        $incidentStatus->nombreEstadoDeIncidencias = $request->nombreEstadoDeIncidencias;
        $incidentStatus->ordenEstadoDeIncidencias = $request->ordenEstadoDeIncidencias;
        $incidentStatus->save();
        return view('incident_statuses.show',['incidentStatus'=>$incidentStatus]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(incidentStatus $incidentStatus)
    {
        $incidentStatus->delete();
        return redirect()->route('incident_statuses.index');
    }
}
