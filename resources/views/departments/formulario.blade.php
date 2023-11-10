@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">DEPARTAMENTO</h2>
                        <form class="mt-2" name="create_platform"
                        action="@if (isset($department)) {{ route('departments.update', $department) }}@else{{ route('departments.store') }} @endif "
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($department))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="nombreDepartamento" class="form-label">Nombre de Departamento</label>
                            <input type="text" class="form-control" id="nombreDepartamento" name="nombreDepartamento" required
                            value="{{ old('nombreDepartamento', $department->nombreDepartamento ?? '')}}" placeholder="Ingresa nombre del departamento"/>
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

