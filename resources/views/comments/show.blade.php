@extends('layouts.app')
@section('content')
<div class="container">
    <h1>{{$comment->idComentario}}</h1>
    <p>{{$comment->textoComentario}}</p>
    <p>{{$comment->tiempoUtilizado}}</p>
</div>
@endsection
