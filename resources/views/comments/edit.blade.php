@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">COMENTARIOS</h2>
                        <form class="mt-2" name="create_platform" action="{{ route('comments.update', $comment) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Campo de Texto -->
                            <div class="form-group">
                                <label for="textoComentario" class="form-label">Texto Comentarios</label>
                                <input type="text" class="form-control" name="textoComentario" id="textoComentario"
                                    required value="{{ $comment->textoComentario }}" placeholder="Ingresa el comentario">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="tiempoUtilizado" class="form-label">Tiempo estimado</label>
                                <input type="number" class="form-control" id="tiempoUtilizado" name="tiempoUtilizado"
                                    required value="{{ $comment->tiempoUtilizado }}"
                                    placeholder="Ingresa el tiempo estimado" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="idIncidencias" class="form-label">Prioridad</label>
                                <select id="idIncidencias" name="idIncidencias">
                                    @foreach ($incidents as $incident)
                                        <option value="{{ $incident->idIncidencias }}">{{ $incident->tituloIncidencias }}
                                        </option>
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
