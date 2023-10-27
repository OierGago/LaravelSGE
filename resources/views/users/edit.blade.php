@extends('layouts.app')
@section('content')
<style>
    /* Estilos para la card con fondo degradado y sombra */
    .custom-card {
        background: #f0f2f5; /* Degradado de azul a verde */
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Sombra */
        padding: 20px;
        border-radius: 10px;
    }
    .form-control {
            border: 1px solid black;
        }
</style>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <!-- Card con fondo degradado y sombra -->
            <div class="card custom-card">
                <div class="card-body">
                    <h2 class="card-title">USUARIOS</h2>
                    <form class="mt-2" name="create_platform" action="{{route('users.update',$user)}} method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- Campo de Texto -->
                        <div class="form-group">
                            <label for="nombreUsuarios" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombreUsuarios" name="nombreUsuarios" required placeholder="Ingresa nombre"/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="mailUsuarios" class="form-label">Mail</label>
                            <input type="text" class="form-control" id="mailUsuarios" name="mailUsuarios" required placeholder="Ingresa el mail"/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="passUsuarios" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="passUsuarios" name="passUsuarios" required placeholder="Ingresa la contraseña"/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="idDepartamento" class="form-label">departamento</label>
                            <select id="idDepartamento" name="idDepartamento" placeholder="Ingresa el departamento>
                                @foreach ($departments as $department)
                                    <option value="{{$department->idDepartamento}}">{{$department->nombreDepartamento}}</option>
                                @endforeach
                             </select>
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
