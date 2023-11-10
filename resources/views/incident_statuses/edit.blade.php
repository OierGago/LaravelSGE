@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <!-- Card con fondo degradado y sombra -->
            <div class="card custom-card">
                <div class="card-body">
                    <h2 class="card-title">ESTADO DE INCIDENCIA</h2>
                    <form class="mt-2" name="create_platform" action="{{route('incident_statuses.update',$incidentStatus)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Campo de Texto -->
                        <div class="form-group mb-3">
                            <label for="nombreEstadoDeIncidencias" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreEstadoDeIncidencias" name="nombreEstadoDeIncidencias" required
                            value="{{$incidentStatus->nombreEstadoDeIncidencias}}" placeholder="Ingresa nombre del Estado"/>
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

