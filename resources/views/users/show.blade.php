@extends('layouts.app')
@section('content')
<div class="container">
<h1>Nombre del usuario: {{$user->nombreUsuarios}}</h1>
<p>creado el {{$user->created_at}}</p>
<p>Pertenece al departamento: {{$user->idDepartamento}}</p>
</div>
@endsection

