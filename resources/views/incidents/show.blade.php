@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="texto">
            {{-- {{dd($incident)}} --}}
            <div class="tabla-titilo">
                <h1>{{ $incident->tituloIncidencias }}</h1>
                <table class="tabla-incidencia">
                    <thead>
                        <th>ID</th>
                        <th>DEPARTAMENTO</th>
                        <th>CATEGORIA</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $incident->idIncidencias }}</td>
                            <td>{{ $incident->departamento->nombreDepartamento }}</td>
                            <td>{{ $incident->categoria->nombreCategoria }}</td>
                        </tr>
                        <tr class="separador">

                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>ESTADO</th>
                            <td colspan="2">{{ $incident->estatus->nombreEstadoDeIncidencias }}</td>
                        </tr>
                        <tr>
                            <th>PRIORIDAD</th>
                            <td colspan="2">{{ $incident->prioridad->nombrePrioridad }}</td>
                        </tr>
                        <tr class="separador">

                            <td colspan="3"></td>
                        </tr>
                        <tr>
                            <th>USUARIO</th>
                            <td colspan="2">{{ $incident->usuario->name }}</td>
                        </tr>
                        <tr>
                            <th>DESCRIPCION</th>
                            <td colspan="2"> {{ $incident->descripcionIncidencias }}</td>
                        </tr>
                        <tr>
                            <th>T.E (Min){{ $incident->tiempoIncidencia }} </th>
                            <th colspan="2">Creado:{{ $incident->created_at }} </th>
                        </tr>
                    </tbody>
                </table>
            </div>


            @auth
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-12">
                    <div class="card carta shadow-0 border">
                        <div class="card-body p-4">
                            <div class="form-outline mb-4">
                                <p class="form-control"><b>Comentarios</b></p>
                            </div>
                            @foreach ($incident->comentarios as $comentario)
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p>{{ $comentario->textoComentario }}</p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <p class="small text-muted mb-0">Respondido el: {{ $comentario->created_at }}
                                                    por: {{ $comentario->usuario->name }}</p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <p class="small text-muted mb-0">Tiempo invertido:
                                                    {{ $comentario->tiempoUtilizado }} minutos</p>
                                                @if ($incident->idUsuarios == Auth::user()->id)
                                                    <form action="{{ route('comments.destroy', $comentario) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-danger" type="submit"
                                                            onclick="return confirm('Are you sure?')">Delete
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        @endauth
        @if (Auth::user() != null && $incident->idDepartamento == Auth::user()->idDepartamento)
            @include('comments.create')
            <div class="d-none">
                <label for="idIncidencias" class="form-label">Incidencia</label>
                <select id="idIncidencias" name="idIncidencias" placeholder="A que incidencia se referencia">
                    <option value="{{ $incident->idIncidencias }}">{{ $incident->tituloIncidencias }}</option>
                </select>
            </div>
            </form>
    </div>
    @endif
@endsection
