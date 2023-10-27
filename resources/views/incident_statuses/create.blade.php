@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">ESTADO DE INCIDENCIAS</h2>
                        <form class="mt-2" name="create_platform" action="{{ route('incident_statuses.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nombreEstadoDeIncidencias" class="form-label">Nombre del Estado De
                                    Incidencias</label>
                                <input type="text" class="form-control" id="nombreEstadoDeIncidencias"
                                    name="nombreEstadoDeIncidencias" required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="ordenEstadoDeIncidencias" class="form-label">Orden Estado De Incidencias</label>
                                <input type="number" class="form-control" id="ordenEstadoDeIncidencias"
                                    name="ordenEstadoDeIncidencias" required />
                            </div>
                            <button type="submit" class="btn btn-primary" name="">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
