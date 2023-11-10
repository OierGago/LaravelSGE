@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">PRIORIDAD</h2>
                        <form class="mt-2" name="create_platform"
                            action="@if (isset($priority)) {{ route('priorities.update', $priority) }}@else{{ route('priorities.store') }} @endif "
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (isset($priority))
                                @method('PUT')
                            @endif
                            <!-- Campo de Texto -->
                            <div class="form-group">
                                <label for="nombrePrioridad" class="form-label">Nombre</label>
                                <input value="{{ old('nombrePrioridad', $priority->nombrePrioridad ?? '') }}" type="text"
                                    class="form-control" id="nombrePrioridad" name="nombrePrioridad" required
                                    placeholder="Ingresa nombre de la prioridad" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ordenPrioridad" class="form-label">Orden Prioridad</label>
                                <input value="{{ old('ordenPrioridad', $priority->ordenPrioridad ?? '') }}" type="number"
                                    class="form-control" id="ordenPrioridad" name="ordenPrioridad" required
                                    placeholder="Ingresa Orden Prioridad" />
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
