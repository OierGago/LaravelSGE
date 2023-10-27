<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use App\Models\departments;
use App\Models\incidents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::all();
        $id = Auth::user()->id;
        if($id != null){
            $incidents=Incidents::where('idUsuarios', $id)->get();
            // dd($incidents);
            return view('users.index',['users' => $users, 'incidents' => $incidents]);
        }
        return redirect("/register");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Departments::all();
        return view('users.create', ['departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new users();
        $user->nombreUsuarios = $request->nombreUsuarios;
        $user->mailUsuarios = $request->mailUsuarios;
        $user->passUsuarios = $request->passUsuarios;
        $user->idDepartamento = $request->idDepartamento;
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(users $user)
    {
        return view('users.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $user)
    {
        $departments = Departments::all();
        return view('users.edit',['user'=>$user, 'departments'=>$departments]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $user)
    {
        $user->name = $request->nombreUsuarios;
        $user->mailUsuarios = $request->mailUsuarios;
        $user->idDepartamento = $request->idDepartamento;
        $user->save();
        return view('users.show',['user'=>$user]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
