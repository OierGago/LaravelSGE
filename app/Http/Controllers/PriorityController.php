<?php

namespace App\Http\Controllers;

use App\Models\priority;
use App\Models\incidents;

use Illuminate\Http\Request;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $priority = Priority::all();

        return view('priorities.index',['priority' => $priority]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$priority = Priority::all();
        return view('priorities.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $priority = new Priority();
        $priority->nombrePrioridad = $request->nombrePrioridad;
        $priority->ordenPrioridad = $request->ordenPrioridad;
        $priority->save();
        return redirect()->route('priorities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(priority $priority)
    {
        return view('priorities.show',['priority' => $priority]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(priority $priority)
    {
        return view('priorities.formulario',['priority' => $priority]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, priority $priority)
    {
        $priority->nombrePrioridad = $request->nombrePrioridad;
        $priority->ordenPrioridad = $request->ordenPrioridad;
        $priority->save();
        return redirect()->route('priorities.show',['priority' => $priority]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(priority $priority)
    {
        $priority->delete();
        return redirect()->route('priorities.index');
    }
}
