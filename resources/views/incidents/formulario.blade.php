@extends('layouts.app')
@section('content')
@if (Auth::user() != null && Auth::user()->id == $incident->idUsuarios)
<div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">INCIDENCIAS</h2>
                        <form class="mt-2" name="create_platform" action="@if (isset($incident)) {{ route('incidents.update', $incident) }}@else{{ route('incidents.store') }} @endif "
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($incident))
                            @method('PUT')
                        @endif
                            <div class="form-group mb-3">
                                <label for="tituloIncidencias" class="form-label">Título</label>
                                <input type="text" class="form-control" id="tituloIncidencias" name="tituloIncidencias"
                                    required value="{{ old('tituloIncidencias', $incident->tituloIncidencias ?? '') }}" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="descripcionIncidencias" class="form-label">Descripción</label>
                                <textarea type="textarea" rows="5" class="form-control" id="descripcionIncidencias" name="descripcionIncidencias">{{ old('descripcionIncidencias', $incident->descripcionIncidencias ?? '') }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tiempoIncidencia" class="form-label">Tiempo estimado</label>
                                <input type="number" min="0" max="150" class="form-control"
                                    id="tiempoIncidencia" name="tiempoIncidencia" required
                                    value="{{ old('tiempoIncidencia', $incident->descripcionIncidencias ?? '') }}" />
                            </div>
                            <div class="form-group mb-3">
                                <label for="idCategoria" class="form-label">Categoria</label>
                                <select id="idCategoria" name="idCategoria">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->idCategoria }}">{{ $category->nombreCategoria }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="idEstadoDeIncidencias" class="form-label">Estado de la incidencia</label>
                                <select id="idEstadoDeIncidencias" name="idEstadoDeIncidencias">
                                    @foreach ($incidentStatuses as $incidentStatus)
                                        <option value="{{ $incidentStatus->idEstadoDeIncidencias }}">
                                            {{$incidentStatus->nombreEstadoDeIncidencias }}</option>
                                    @endforeach
                                </select>
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
                        <br>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <br>
                        @if (isset($incident))
                            <br>
                            <form action="{{ route('incidents.destroy', $incident) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"
                                    onclick="return confirm('Are you sure?')">Borrar</button>
                            </form>
                        @endif
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
