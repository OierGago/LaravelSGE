@extends('layouts.app')
@section('content')

<style>
    /* Estilos para la card con fondo degradado y sombra */
    .custom-card {
        background: #f0f2f5; /* Degradado de azul a verde */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Sombra */
        padding: 20px;
        border-radius: 10px;
    }
    .form-control {
            border: 1px solid black;
        }
</style>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <!-- Card con fondo degradado y sombra -->
            <div class="card custom-card">
                <div class="card-body">
                    <h2 class="card-title">COMENTARIOS</h2>
                    <form class="mt-2" name="create_platform" action="{{route('comments.update',$comment)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Campo de Texto -->
                        <div class="form-group">
                            <label  for="textoComentario" class="form-label">Texto Comentarios</label>
                            <input type="text" class="form-control" name="textoComentario" id="textoComentario" required value="{{$comment->textoComentario}}" placeholder="Ingresa el comentario">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="tiempoUtilizado" class="form-label">Tiempo estimado</label>
                            <input type="number" class="form-control" id="tiempoUtilizado" name="tiempoUtilizado" required
                            value="{{$comment->tiempoUtilizado}}" placeholder="Ingresa el tiempo estimado"/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="idIncidencias" class="form-label">Prioridad</label>
                            <select id="idIncidencias" name="idIncidencias">
                                @foreach ($incidents as $incident)
                                    <option value="{{$incident->idIncidencias}}">{{$incident->tituloIncidencias}}</option>
                                @endforeach
                        </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

