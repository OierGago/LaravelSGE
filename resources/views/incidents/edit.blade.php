@extends('layouts.app')
@section('content')
    @if (Auth::user() != null && Auth::user()->id == $incident->idUsuarios)
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <!-- Card con fondo degradado y sombra -->
                    <div class="card custom-card">
                        <div class="card-body">
                            <form class="mt-2" name="create_platform" action="{{ route('incidents.update', $incident) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="TituloIncidencias" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="TituloIncidencias"
                                        name="TituloIncidencias" required value="{{ $incident->tituloIncidencias }}" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="descripcionIncidencias" class="form-label">Descripción</label>
                                    <textarea type="textarea" rows="5" class="form-control" id="descripcionIncidencias" name="descripcionIncidencias">{{ $incident->descripcionIncidencias }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="tiempoIncidencia" class="form-label">Tiempo estimado</label>
                                    <input type="number" class="form-control" id="tiempoIncidencia" name="tiempoIncidencia"
                                        min="0" max="150" required value="{{ $incident->tiempoIncidencia }}" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="idPrioridad" class="form-label">Prioridad</label>
                                    <select id="idPrioridad" name="idPrioridad">
                                        @foreach ($priorities as $priority)
                                            <option value="{{ $priority->idPrioridad }}">{{ $priority->nombrePrioridad }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="">Actualizar</button>
                            </form><br>
                            <form action="{{ route('incidents.destroy', $incident) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you sure?')">Borrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <h2>Para poder modificar el incidente debes estar registrado y ser dueño de la incidencia</h2>
        </div>
    @endif
@endsection
