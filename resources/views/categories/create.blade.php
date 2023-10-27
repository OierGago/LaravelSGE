@extends('layouts.app')
@section('content')
<div class="container">
<form class="mt-2" name="create_platform"
action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group mb-3">
    <label for="nombreCategoria" class="form-label">Nombre Categoria</label>
    <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria" required/>
</div>
<button type="submit" class="btn btn-primary" name="">Crear</button>
</form>
</div>
@endsection
