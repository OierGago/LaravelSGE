<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\incidents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incidents= Incidents::all();
        $comments = Comments::all();
        return view('comments.index',['comments' => $comments]);
    }

    /**
     * Display the specified resource.
     */
    public function show(comments $comment)
    {
        return view('comments.show',['comment'=>$comment]);

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $incidents= Incidents::all();

        return view('comments.create', ['incidents'=>$incidents]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = new comments();
        $comment->textoComentario = $request->textoComentario;
        $comment->tiempoUtilizado = $request->tiempoUtilizado;
        $comment->idIncidencias = $request->idIncidencias;
        $comment->idUsuarios = auth()->user()->id;
        $comment->save();
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(comments $comment)
    {
        $incidents= Incidents::all();
        return view('comments.edit',['comment'=>$comment], ['incidents'=>$incidents]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, comments $comment)
    {

        $comment->textoComentario = $request->textoComentario;
        $comment->tiempoUtilizado = $request->tiempoUtilizado;
        $comment->idIncidencias = $request->idIncidencias;
        $comment->save();
        return view('comments.show', ['comment' => $comment]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(comments $comment)
    {
       $comment->delete();
       return redirect()->back();
    }
}
