@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <!-- Card con fondo degradado y sombra -->
            <div class="card custom-card">
                <div class="card-body">
                    <h2 class="card-title">PRIORIDAD</h2>
                    <form class="mt-2" name="create_platform" action="{{route('priorities.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Campo de Texto -->
                        <div class="form-group">
                            <label for="nombrePrioridad" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombrePrioridad" name="nombrePrioridad" required placeholder="Ingresa nombre de la prioridad"/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="ordenPrioridad" class="form-label">Tiempo estimado</label>
                            <input type="number" class="form-control" id="ordenPrioridad" name="ordenPrioridad" required placeholder="Ingresa el tiempo estimado"/>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
