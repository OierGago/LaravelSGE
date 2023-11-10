@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">CATEGORIA</h2>
                        <form class="mt-2" name="create_platform" action="{{ route('categories.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nombreCategoria" class="form-label">Nombre Categoria</label>
                                <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria"
                                    required />
                            </div>
                            <button type="submit" class="btn btn-primary" name="">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
