@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">INCIDENCIAS</h2>
                        <form class="mt-2" name="create_platform" action="{{ route('incidents.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="tituloIncidencias" class="form-label">Título</label>
                                <input type="text" class="form-control" id="tituloIncidencias" name="tituloIncidencias"
                                    required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="descripcionIncidencias" class="form-label">Descripción</label>
                                <textarea type="textarea" rows="5" class="form-control" id="descripcionIncidencias" name="descripcionIncidencias"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="tiempoIncidencia" class="form-label">Tiempo estimado</label>
                                <input type="number" min="0" max="150" class="form-control" id="tiempoIncidencia" name="tiempoIncidencia"
                                    required />
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
                                            {{ $incidentStatus->nombreEstadoDeIncidencias }}</option>
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
                            <button type="submit" class="btn btn-primary" name="">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
