@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <!-- Card con fondo degradado y sombra -->
                <div class="card custom-card">
                    <div class="card-body">
                        <h2 class="card-title">CATEGORIA</h2>
                        <form class="mt-2" name="create_platform"
                        action="@if (isset($category)) {{ route('categories.update', $category) }}@else{{ route('categories.store') }} @endif "
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($priority))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label  for="nombreCategoria">Nombre Categoria</label>
                            <input type="text" class="form-control" id="nombreCategoria" required value="{{old('nombreCategoria',$category->nombreCategoria ?? '')}}" placeholder="Ingresa nombre de la categoria">
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

