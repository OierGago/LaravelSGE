@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">ESTADO DE INCIDENCIAS</h2>
                        <form class="mt-2" name="create_platform"
                        action="@if (isset($incidentStatus)) {{ route('incident_statuses.update', $department) }}@else{{ route('incident_statuses.store') }} @endif "
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($priority))
                            @method('PUT')
                        @endif
                        <div class="form-group mb-3">
                            <label for="nombreEstadoDeIncidencias" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreEstadoDeIncidencias" name="nombreEstadoDeIncidencias"
                            value="{{old('nombreEstadoDeIncidencias',$incidentStatus->nombreEstadoDeIncidencias ?? '')}}" placeholder="Ingresa nombre del Estado"/>
                        </div>
                        <br>
                        <div class="form-group mb-3">
                            <label for="ordenEstadoDeIncidencias" class="form-label">Orden</label>
                            <input type="number" class="form-control" id="ordenEstadoDeIncidencias" name="ordenEstadoDeIncidencias"
                            value="{{old('ordenEstadoDeIncidencias',$incidentStatus->ordenEstadoDeIncidencias ?? '')}}" placeholder="Ingresa el orden"/>
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

